	<footer>

  </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">

    // $("button").click(function(){
    //   $("table").fadeOut("slow");
    // });

    // $("#btmostra").click(function(){
    //   $("table").fadeIn("slow");
    // });


        // MOSTRAR LISTA INICIALMENTE
        $("#btnMostraTabela").click(function(){
          $("#tblProd").show( "slow", function(){
            //animação completa
          });
          $("#btnMostraTabela").hide("fast", function(){
            //esconde
          });
          $("#btnAtualizaDiv").show("fast", function(){
            //mostra
          });
        });

        $("#btnAtualizaDiv").click(function(){
          $("#tblProd").toggle().toggle();
        });


    </script>






</body>
</html>