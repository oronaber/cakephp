<div class="container">
	<div class="row">
		
        <div class="col-md-7 ">

            <div class="panel panel-default">
              <div class="panel-heading">  <h4 >Detalle del Usuario</h4></div>
              <div class="panel-body">
                   
                <div class="box box-info">
        
                    <div class="box-body">
                     
                        <div class="col-sm-6">
                        <h4 style="color:#00b1b1;"><?= $user->first_name.' '.$user->last_name ?></h4></span>
                          <span><p><?= $user->role ?></p></span>            
                        </div>
                        <div class="clearfix"></div>
                        <hr style="margin:5px 0 5px 0;">
    
              
                        <div class="col-sm-5 col-xs-6 tital " >Nombre:</div><div class="col-sm-7 col-xs-6 "><?= $user->first_name ?></div>
                             <div class="clearfix"></div>
                        <div class="bot-border"></div>
                        
                        <div class="col-sm-5 col-xs-6 tital " >Apellidos:</div><div class="col-sm-7"> <?= $user->last_name ?></div>
                          <div class="clearfix"></div>
                        <div class="bot-border"></div>
                        
                        <div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7"><?= $user->email ?></div>
                        
                          <div class="clearfix"></div>
                        <div class="bot-border"></div>
                        
                        <div class="col-sm-5 col-xs-6 tital " >Rol:</div><div class="col-sm-7"><?= $user->role ?></div>
                        
                          <div class="clearfix"></div>
                        <div class="bot-border"></div>
                        
                        <div class="col-sm-5 col-xs-6 tital " >Habilitado:</div><div class="col-sm-7"><?= $user->active ? 'SI' : 'NO' ?></div>
                        
                         <div class="clearfix"></div>
                        <div class="bot-border"></div>
                        
                         <div class="col-sm-5 col-xs-6 tital " >Creado:</div><div class="col-sm-7"><?= $user->created->nice() ?></div>
                        
                         <div class="clearfix"></div>
                        <div class="bot-border"></div>
                        
                        <div class="col-sm-5 col-xs-6 tital " >Modificado:</div><div class="col-sm-7"><?= $user->modified->nice() ?></div>
                        
                         <div class="clearfix"></div>
                        <div class="bot-border"></div>
                        


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  

   </div>
</div>