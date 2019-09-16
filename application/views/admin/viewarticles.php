<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    padding: 7px 15px;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
.banner-img{
	width:100px;
	height:50px;
	padding:2px;
	border:1px solid #ccc;
}
.banner-img img{
	width:100%;
	height:100%;
}
</style>
<div class="page-content">

<div class="content">
<ul class="breadcrumb">
<li>
<p>YOU ARE HERE</p>
</li>
<li><a href="#" class="active">Tables</a>
</li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
<h3>View/Edit <span class="semi-bold"> Articles</span></h3>
</div>
<div class="row">

<div class="col-md-12">
<div class="grid simple ">

<div class="grid-body no-border">

<table class="table no-more-tables">
<thead>
<tr>
 <th style="width:5%">
   S.No
</th>
<th style="width:10%">Banner Image</th>
<!-- <th style="width:10%">Category</th> -->
<th style="width:10%">Title</th>
<th style="width:8%">Author</th>
<th style="width:7%">ACTIONS</th>

</tr>
</thead>
<tbody>
 <?php
                   /*echo "<pre>"; 
                   print_r($users);*/
                   if(!empty($articles)){
                                 $i=1;
                        foreach ($articles as $article) {?>
<tr>
<td class="v-align-middle">
<?=$i?>
</td>
<td class="v-align-middle">
<div class="banner-img"><img src="<?=base_url('uploads/article_images/'.$article['banner_image'])?>"/></div>
</td>
<!-- <td class="v-align-middle">JAVA</td> -->


<td><span class="muted"><?=$article['title']?></span>
</td>
<td class="v-align-middle"><?=$article['author']?></td>
<td class="v-align-middle">
 <div class="btn-group">
 <a href="javascript:void(0)" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space" aria-expanded="true"><i class="fa fa-bars" aria-hidden="true"></i> </a>						
 <ul class="dropdown-menu">
	<li data-filter="camping" data-dimension="recreation"><a href="<?= base_url("admin/createarticle/".$article['id']) ?>">Edit</a></li>
	<li data-filter="climbing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-5" data="<?= $article['id'] ?>" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Delete</a></li>
 </ul>
</div>
</td>
</tr>

<?php $i++;}}else{?>
 <tr><td> No records are available</td></tr>
 <?php   }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

</div>

</div>
<script>
    Array.prototype.forEach.call(document.querySelectorAll('.sweet-5'), function(button) {
        button.onclick = function() {
            var id = $(this).attr("data");
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: '<?= base_url("admin/deleteartical") ?>',
                        data: {
                            "id": id
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.success == 1) {
                                $("remove"+id).remove();
                                swal("Deleted!", "City has been deleted!", "success");
								window.location='';
                            } else {
                                swal("Deleted!", data.message + "!", "Error");
                            }
                        }
                    });
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        }
    });
</script>

</body>
</html>
