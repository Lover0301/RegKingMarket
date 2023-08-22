$(function() {
    $('.add-to-cart').on('click', function(e){
        e.preventDefault();
        let = id = $(this).data('id');
        $.ajax({
            url:'cart.php',
            type:'GET',
            data:{cart: 'add', id: id},
            datatype: 'json',
            success: function(res) {
                if(res.code =='ok'){
                    alter('ok');
                    
                } else {
                    alter('Error')
                }
            },
            error: function(){
                alert('Error');
            }
        }); 
        location.href='korzina.php'
    });


    $('#clear-cart').on('click', function() {
        $.ajax({
            url:'cart.php',
            type:'GET',
            data:{cart: 'clear'},
            success: function(res) {
            },
            error: function(){
                alert('Error');
            }
        });
        location.href='korzina.php'
    });
});