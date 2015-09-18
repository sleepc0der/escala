<div class='container'> <!-- conteudo -->

      <?php
      if(isset($_GET['acao'])){
        if(!isset($_POST['logar'])){
        $acao = $_GET['acao'];
        if($acao=='bemvindo'){
        echo '<div class="alert alert-info" role="alert">'
            . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
            . '<strong>Olá Seja Bem-vindo!(a)</strong>'
            . '</div>';
       
      }
    } 
    
  } //fim do if do get
    
      ?>

    <div class="well"> <!-- inicio da well -->
    
      <div class="text-center"> <!-- inicio text-center -->
             <button type="submit" class="btn btn-default btn-sm">
                 <img src="icones/glyphicons-174-play.png" width="23" height="23">
            </button>
             <button type="submit" class="btn btn-default btn-sm">
                 <img src="icones/glyphicons-445-floppy-saved.png" width="23" height="23">
            </button>
          <button type="submit" class="btn btn-default btn-sm">
                 <img src="icones/print.png" width="23" height="23">
            </button>
                    <div class="container-fluid">
                        <div class="col-md-2"></div>
                        <div class="list-group text-left col-md-8"></div>
                        <div class="col-md-2"></div>
                    </div>
                    
      </div><!-- fim text-center -->
    
      <!---------------------------------------- -->
      
      <div class="row"> <!--  inicio row -->
          
          <br>
          <div class="col-xs-12 col-sm-6 col-md-8">
    <table class="table table-fixed table-bordered">
 
    <thead>
        <tr class="alert-info">
        
        
        <th>Sáb.Manhã</th>
        <th>Sáb.Tarde </th>
        <th>Sáb.Noite</th>
        <th>Dom.Manhã</th>
        <th>Dom.Tarde</th>
        <th>Dom.Noite</th>
      
      </tr>
    </thead>
     
    <tbody>
        
         <?php
    if(!isset($_GET['id'])){  }
    $id = @$_GET['id'];  
 
    
    try {
        
        
        $delete = 'DELETE FROM operacao WHERE id = :id';
        $resultado = $conexao->prepare($delete);
        $resultado->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado->execute();
        
    } catch(PDOException $e) { 
        echo 'Error:' . $e->getMessage();
    }
    ?>
            
        
        
        <?php
        $select = "SELECT * from operacao ORDER BY id DESC";
       $cont = 1;

   try {
        $resultado = $conexao->prepare($select);
        $resultado->execute();
        $cont = $resultado->rowCount();
        if($cont>0){
            while ($mostrar = $resultado->FETCH(PDO::FETCH_OBJ)){
     ?>
        <tr class="sortable">
        <!--<td> <?php echo $cont++;?></td> -->
        <!--<td> <?php echo $mostrar->nome;?></td> -->
            <td class="cor" bgcolor="<?php echo $mostrar->cor;?>"<td><?php echo $mostrar->pais;?></td></td>
            <td></td>
        <td></td>
        <td></td>
        <td></td>
         <td></td>
        
       
      </tr>
    
    
        <?php
        
            }
   
        }else{
            
        }
    }catch (PDOException $e) {
        echo $e;
    }
    
        ?> 
      
     
    </tbody>
    
    
  </table>
              
              </div>
        

   <div class="col-xs-6 col-md-4"> <!-- inicio  col -->
          <table class="table table-fixed table-bordered">
 
    <thead>
        <tr class="alert-info">
        <th>Ordem</th>
        <th>Nome</th>
        <th>País</th>
        <th>Alterar</th>
          </tr>
    </thead>
    
   
      
    <tbody id="lista">
      
        
        <?php
        $select = "SELECT * from operacao ORDER BY id DESC";
       $cont = 1;

   try {
        $resultado = $conexao->prepare($select);
        $resultado->execute();
        $cont = $resultado->rowCount();
        if($cont>0){
            while ($mostrar = $resultado->FETCH(PDO::FETCH_OBJ)){
     ?>
        <tr>
            
            
            
      <!--<td><?php echo $cont++;?></span></td>-->
      <td>&nbsp;&nbsp;&nbsp;<img src="icones/glyphicons-187-move.png" height="15" width="15"></td>
      <td> <?php echo $mostrar->nome;?></td>
        <td class="cor" bgcolor="<?php echo $mostrar->cor;?>"<td><?php echo $mostrar->pais;?></td></td>
        <td>
         <a class="btn btn-warning" href="home.php?acao=editar&id=<?php echo $mostrar->id;?>">
        <img src="icones/glyphicons-151-edit.png" height="8" width="8"></a>
         &nbsp;&nbsp;&nbsp; 
         <a class="btn btn-danger" href="home.php?acao=excluir&id=<?php echo $mostrar->id;?>">
             <img src="icones/glyphicons-208-remove-2.png" height="8" width="8"></a>
        </td>
      </tr>
       
        <?php
        
            }
   
        }else{
            
        }
    }catch (PDOException $e) {
        echo $e;
    }
    ?>    
    
    </tbody>
          
          </table>
  </div> <!-- fim  col 2 tabela -->
  
  
      </div> <!--  fim row -->
     

   
    </div> <!-- fim do well -->
    
 </div> <!-- fim da container -->

 
 <script>
 
 $('#lista').sortable();
 
 $('#lista').sortable({
    helper: fixWidthHelper
}).disableSelection();
    
function fixWidthHelper(e, ui) {
    ui.children().each(function() {
        $(this).width($(this).width());
    });
    return ui;
}

$( '.sortable' ).sortable({
    items: 'td',
    cursor: "move",
    //opacity: 0.8,
    helper: "clone",
    itens: "> td",
    axis: "x",
    revert: '100', //arrasta mas rapido, sem efeito
    forceHelperSize: true,
    tolerance: 'pointer',
    placeholder: 'placeholder'
    
});



 </script>
