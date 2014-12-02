<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Linha de Comando</title>
        <link rel="stylesheet" href="css/style.css"/>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel-min.js"></script>
        <script src="js/jquery.terminal-0.8.8.js" type="text/javascript"></script>
        <link href="css/jquery.terminal.css" rel="stylesheet"/>
        <script type="text/javascript">
            
            jQuery(document).ready(function($) {
    var id = 1;
    $('#terminal').terminal(function(cmd, trm){
        
        
        if(cmd  ==  'root'){
            trm.push(function(cmd, trm){
                
            },{ prompt : 'root > ' });
        }else if (cmd == 'bank'){
            trm.push(function(cmd, trm){
                
            },{ prompt: 'Bank > '});
            
        }else if (cmd == 'btc'){
            trm.push(function(cmd, trm){
                
            },{ prompt: 'Bitcoin Market > ' });
        }else if(cmd == 'teste'){
            trm.push("testeDocumentation.php",{
                prompt : 'teste >',
                login: true,
                greetings: 'Você está conectado como teste !'
            });
            
        }else{
            trm.echo("Comando não existe.");
        }
    
    });
          /*      
                "bankDocumentation.php",{
                login: true,
                greetings: "Você está conectado",
                prompt: 'Banco Internacional >',
                name: 'banco'
                        });
            
                function(command, term) {
        if (command == 'root'){
            term.push(function(command, term) {
                
                $.post('rootDocumentation.php',{
                        'command': command
                    }, function(data){
                        term.echo(data);
                    });
                
            }, { prompt: 'root@1.2.3.4:~# > ', name: 'root'});
        } else if (command == "goto bank") {
            "bankDocumentation.php",{
                login: true,
                greetings: "Você está conectado"
                        }
                    }/*, { name: 'bank', prompt: 'bank > '});
        } else if (command == "goto btc_market") {
            term.push(function(command, term) {
                if (command == 'ping') {
                    term.echo('pong');
                } else {
                    term.echo('unknown command ' + command);
                }
            }, { name: 'btc', prompt: 'market > '});
        } else {
            term.echo("unknow command " + command);
        }
        
        
    }, {
        prompt: 'root@1.2.3.4:~# ', name: 'root'
    });*/
});

   
        
        </script>
    </head>
    <body>
        <div id="tudo">
            <h1>Console</h1>
            <form id="form">
                <div id="terminal">
                </div>
            </form>
        </div>
    </body>
</html>
