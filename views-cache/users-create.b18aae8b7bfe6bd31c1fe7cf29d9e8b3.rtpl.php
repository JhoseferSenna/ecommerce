<?php if(!class_exists('Rain\Tpl')){exit;}?>    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>
                Lista de Usuários
              </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/admin/users">Usuários</a></li>
                <li class="active"><a href="/admin/users/create">Cadastrar</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Novo Usuário</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/admin/users/create" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="desperson">Nome</label>
                      <input type="text" class="form-control" id="desperson" name="desperson"
                        placeholder="Digite o nome">
                    </div>
                    <div class="form-group">
                      <label for="deslogin">Login</label>
                      <input type="text" class="form-control" id="deslogin" name="deslogin"
                        placeholder="Digite o login">
                    </div>
                    <div class="form-group">
                      <label for="nrphone">Telefone</label>
                      <input type="tel" class="form-control" id="nrphone" name="nrphone"
                        placeholder="Digite o telefone">
                    </div>
                    <div class="form-group">
                      <label for="desemail">E-mail</label>
                      <input type="email" class="form-control" id="desemail" name="desemail"
                        placeholder="Digite o e-mail">
                    </div>
                    <div class="form-group">
                      <label for="despassword">Senha</label>
                      <input type="password" class="form-control" id="despassword" name="despassword"
                        placeholder="Digite a senha">
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="inadmin" value="1"> Acesso de Administrador
                      </label>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->