$(document).ready(function(e){

    //Login Effects
    if(/login+/.test(window.location.href)){

        $('section.App').stop(true).hide(0).fadeIn('slow', ()=>{ return 1 })
        
    }

    //Smooth Reload
    $('section.App .mainbar .content').css({
        'margin-top': '-200px',
        'opacity': .0
    }).animate({
        marginTop: '70px',
        opacity: '1'
    }, 'slow');

    //Requisitioning
    $('table#requests #delete').on('click', function(e){
        if(!$(this).parents('tr').hasClass('removed') ){
            $(this).parents('tr').addClass('removed')  ;

            $(this).parents('tr').find('input').attr('disabled', 'disabled')
            $(this).text('Restore')
        }
        else {

            $(this).parents('tr').removeClass('removed')

            $(this).parents('tr').find('input').removeAttr      ('disabled')
            $(this).text('Remove')
        }
    });

    $('table#requests input').on('keyup',   function(e){
        let cost = $.trim($(this).parents('tr').find('td').eq(2).text()   );
            bill = cost.replace('₦','').replace(',','')

            if(!/^\d+$/.test($(this).val().trim()) || $(this).val() < (1) ){
                $(this).val('') //resets input if detect input is an illegal
                $(this).parents('tr').find('td').eq(4).text(cost) ;        ;
            }
            else {

                bill = parseInt($(this).val()) * bill;
                bill = '₦'+bill;

                $(this).parents('tr').find('td').eq(4).text(bill) ;        ;
            }
    });

    var requistions, getTotal = 0, txID = 0 ;
    $('.content [href=#approve]').on('click',function(e){
        e.preventDefault();

        requisitions = {}
        let getCollected = 0;
        let neededStocks = $('table#requests tr').length-1
        let cancelStocks = $('table#requests tr.removed').length;

        $('#requests tbody >  tr:not(.removed)').each (function(e){
            let itemName = $(this).find('td').eq(1).text().trim()
            let cost = $(this).find('td').eq(2).text().trim()
                cost = cost.replace('₦','').replace(',','')
            let quantity = $(this).find('td').eq(3).children('input').val( )
            let total = $(this).find('td').eq(4).text().trim()
                total = total.replace('₦','').replace(',','')
            
            if(quantity.length > 0)  {
                requisitions[itemName] = {
                    'itemName': itemName,
                    'cost': cost,
                    'quantity': quantity,
                    'total': total
                }
                getCollected++;
            }
        });

        if(cancelStocks == neededStocks || getCollected==0){
            return alert("You have not selected any stock");
        }

            //show  form
            $('section.App .mainbar .content .w-overlay').fadeIn    ('slow')
            $('.preview table#orders tbody').html('')

            //build form
            i=1, getTotal =0, txID = Math.floor(Math.random()*90000)+(10000)

            for(var item in requisitions) {
                let id = i;
                let itemName = requisitions[item]['itemName'];
                let required = requisitions[item]['quantity'];
                let cost = requisitions[item]['cost'];
                let getPrice = required * cost
                    getTotal+= getPrice;
                
                $('.preview table#orders tbody').append(build('.model',    {
                    'id' : id,
                    'itemName' : itemName,
                    'quantity' : required,
                    'cost' : '₦'+cost,
                    'getPrice' : '₦'+getPrice
                }));
                i++;
            }
            $('.content .preview .info div:eq(0) span').text(txID) /////////
            $('.content .preview .info div:eq(1) span').text(i -1) /////////
            $('.content .preview .info div:eq(2) span').text('₦' + getTotal)
            $('.content .preview .info div:eq(4) span').text(txID)
            $('.content .preview .hr .float-right > b').text('₦' + getTotal)

            ////////////////////////////////////////////////////////////////
    });

    window.approveRequistions = () => {
        let approved = confirm("Do you really want to approve requistions?")

        if(approved){
            let collected = {
                'orderID': txID,
                'requisitions': JSON.stringify(requisitions),
                'total': i - 1 ,
                'overallTotal': getTotal,
                'status': 'approved'
            }
            $.post($('.orders').data('api'), collected,(response, status)=>{

                location.reload();

            });
        }
    }

    const build = (getModel, ...getParameter) =>     {
        var model = $.trim($(getModel).html()        )  ; //////////////////
        for(let x in getParameter)   {
            for(let n of Object.keys (getParameter[x])  ) //////////////////
            {
                if(getParameter[x][n]  ==  (undefined)  )                  {
                    getParameter[x][n] = $('[name='+n+']').val( ).trim (  );
                }
                model = model.replace(RegExp(':'+n,'g'),getParameter[x][n]);
            }
            return(model) //returning a dynamic components to the view model
        }
    };
});