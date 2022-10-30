<div class="row mt-4 mx-0">
    <div class="col-md-6 card bg-darkblue card-body">
        <p class="text-white  my-4 small"><i class="fas fa-dot-circle text-warning me-1"
                aria-hidden="true"></i>TEMAN</p>
        <table class="table table-hover">
            <tbody>
                <?php foreach($teman as $row):?>
                <tr>
                    <td>
                        <img src="<?=base_url()?>media/avatar/<?=$row->UserAvatar?>" class="small-ava" alt="">
                    </td>
                    <td><?=$row->UserName?></td>

                </tr>
                <?php  endforeach;?>
            </tbody>
        </table>
       
    </div>
    <div class="col-md-6 d-none d-sm-block"> <img src="<?=base_url()?>assets/img/vector/Collab-amico.svg" class="" alt="" srcset=""></div>
</div>
</div>
</main>