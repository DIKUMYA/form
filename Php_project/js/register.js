jQuery(function() {
    //  alert('Hello girl');
    $(document).on('submit'),'#register',function(e){
        e.preventDefault();
        // let name = $('#name').val();
        let from = $(this)[0];
        let data = new FormData(form);
        $.ajax({
            type:"POST",
            enctype:"multipart/form-data",
            url:"./register.php",
            processData:false,
            contentType:false,
            data:data,
            cache:false,
            success:function(response){
                alert('success');
                console.log('response => ', response);
            },
            error:function(error){
                console.log('error => ', error);
                alert('error');
           }
        })
        // let from1 = $('register')[0];
    }
})