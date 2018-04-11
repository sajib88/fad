<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Audio Album
            <small>Create audio Album</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Audio </a></li>
            <li class="active">Create audio Album </li>
        </ol>
    </section>


    <?php echo $this->session->flashdata('msg');?>



    <section class="content">
        <!-- /.row -->
        <div class="panel panel-default">
            <div class="panel-body box box-primary">

                <div class="row">

                    <div class="col-lg-4">
                        <div class="col-md-12 well text-center">
                            <form action="<?php echo base_url()?>audio/audio/add_album" method="post">
                            <div class="form-group">                                
                                <input type="hidden" name="user_id_post" value="<?php echo $user_id;?>">
                                <label for="album" class="sr-only">Create Album</label>
                                <input type="text" name="album_name" id="album" placeholder="Create Album" required class="form-control" />
                            </div>
                            <button type="submit" name="insert" class="btn btn-success">Create Album</button>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
</div>
