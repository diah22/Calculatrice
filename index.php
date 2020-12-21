<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link rel="stylesheet" href="css/index.css">
        <title>Calculatrice scientifique</title>
    </head>
    <body>
        <div class="content">
            <div class="row">
                <div class="col">
                    <input id="saisie" type="text" placeholder="0"/>
                </div>
            </div>
            <div class="buttons">
                <div class="row" id="deg">
                    <div class="col">
                        <button>DEG</button>
                    </div>
                    <div class="col">
                        <button>HYP</button>
                    </div>
                    <div class="col">
                        <button>F-E</button>
                    </div>
                </div>
                <div class="row" id="m">
                    <div class="col">
                        <button>MC</button>
                    </div>
                    <div class="col">
                        <button>MR</button>
                    </div>
                    <div class="col">
                        <button>M+</button>
                    </div>
                    <div class="col">
                        <button>M-</button>
                    </div>
                    <div class="col">
                        <button>MS</button>
                    </div>
                </div>
                <div class="row" class="two_col">
                    <div class="col-1">
                        <div class="row">
                        <?php
                            $tabTrigo= ['sin', 'cos', 'tan', 'log', 'sin-1', 'cos-1', 'tan-1'];
                            for($i=0; $i<sizeof($tabTrigo); $i++){
                             ?>
                             <button><?php echo $tabTrigo[$i]; ?></button>
                        <?php   
                            }
                        ?>
                        </div>
                        <div class="row">
                            <button>x²</button>
                            <button>x3</button>
                            <button>10x</button>
                            <button>v</button>
                            <button>1/x</button>
                        </div>
                        <div class="row">
                            <button>Exp</button>
                            <button>Mod</button>
                            <button>deg</button>
                            <button>ln</button>
                            <button>ex</button>
                        </div>
                        <div class="row">
                            <button>Pi</button>
                            <button>n!</button>
                            <button>(</button>
                            <button>)</button>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="row">
                            <div class="col-2-1">
                                <button>CE</button>
                                <button>C</button>
                                <button>del</button>
                            </div>
                            <div class="col-2-2">
                                <button>=</button>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-2-1">
                                <?php
                                    $chiffre=9;
                                    while($chiffre > 0){
                                        ?>
                                        <button><?php echo $chiffre ?></button>
                                        <?php
                                        $chiffre = $chiffre-1;
                                        }
                                        ?>
                                <button>+-</button>
                                <button>0</button>
                                <button>,</button>
                            </div>
                            <div class="col-2-2">    
                            <?php
                                $tabOp=['+', '-', 'x', '/'];
                                for($i=0; $i<sizeof($tabOp); $i++){
                                    ?>
                                    <button> <?php echo $tabOp[$i]; ?></button>
                            <?php
                                }
                            ?>                   
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="row">
                
                </div>
            </div>
        </div> 
    </body>
</html>