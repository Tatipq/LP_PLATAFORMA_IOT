function sendMail(){
    $(document).ready(function(){
        $('form').trigger("reset");
        $('#submit').click(function(){
            var nome = $('#nome').val();
            var email = $('#email').val();
            var telefone = $('#subject').val();
            var assunto = $('#assunto').val();
    
            $('#alert').html('');
    
            $.ajax({
                url:'email.php',
                method: 'POST',
                data: {nome: nome, email:email, telefone:telefone, assunto:assunto},
                success: function(result) {
                    $('form').trigger("reset");
                    $('#sent-message').addClass("alert-success");
                    $('#sent-message').fadeIn().html(result);
                    setTimeout(function(){
                        $('#sent-message').fadeOut('Slow');
                    },3000);
                }
            });
    
        });
    });
}