<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type="text/css">
    /* CSS Document */
    body{
        padding:0;
        margin:0;
    }
    .header{
        width:100%;
        height:80px;
        background:#0080C0;
    }
    .header-left{
        width:300px;
        float:left;
        margin-left:2%;
        font-family:Arial;
        font-size:25px;
        color:#fff;
        padding-top:8px;
    }
    .content{
        width:98%;
        margin:0 auto;
        margin-top:20px;
    }
    .content-user{
        width:50%;
        height:400px;
        border-radius:3px;
        background:#EFF;
    }
    .user-header{
        width:96%;
        height:80px;
        font-family:Arial;
        font-size:28px;
        color:#999;
        padding-left:4%;
        padding-top:10px;
    }
    .user-con{
        width:100%;
        height:70px;
        border-top:1px solid#EEE;
    }
    .con-left{
        font-family:Arial Narrow;
        font-size:18px;
        color:#CCC;
        padding-top:20px;
        float:left;
        padding-left:20px;
    }
    .con-right{
        font-family:Arial Narrow;
        font-size:18px;
        color:#CCC;
        float:right;
        padding-top:20px;
        padding-right:20px;
    }
    .log{
        width:95%;
        text-align:center;
        margin:5% auto;
        padding:10px 0px 10px 0px;
        background:#FF6262; 
        color:#FFF;
        border-radius:3px;
        font-family:Arial;
    }
    .content-left{
        width:24%;
        height:auto;
        border:1px solid#FFF;
        float:left;
        box-shadow:0 0 5px#CCC;
    }
    .content-right{
        width:74.5%;
        box-shadow:0 0 5px#ccc;
        height:auto;
        border:1px solid#FFF;
        float:right;
    }
    .menu-header{
        width:93%;
        height:35px;
        background:#0080C0;
        margin:10px auto;
        font-family:Arial;
        font-size:17px;
        color:#fff;
        padding-left:2%;
        padding-top:10px;
    }
    .menu{
        padding:0;
        margin:0;
    }
    .menu li{
        width:85%;
        border:1px solid#ccc;
        list-style:none;
        padding:10px 0px 10px 5px;
        margin-bottom:8px;
        margin-left:10%;
        font-family:Arial Narrow;
        color:#666;
    }
    .menu li:hover{
        background:#EEE;
    }
    .menu-active{
        background:#EEE;
    }
    .dalam{
        width:98%;
        margin:0 auto;
        margin-top:1%;
        margin-bottom:1%;
    }
    a{
        text-decoration:none;
    }
    .col-search{
        width:100%;
        height:30px;
        margin-top:10px;
    }
    input[name="search"]{
        width:30%;
        border:1px solid#CCC;
        height:30px;
        padding-left:1%;
        color:#666;
        float:left;
    }
    input[name="car"]{
        width:5%;
        border:none;
        background:#22B7FF;
        margin-left:0.5%;
        color:#FFF;
        height:32px;
        border-radius:3px;
        float:left;
    }
    .jum{
        float:right;
        border:1px solid#999;
        color:#666;
        font-family:Arial;
        font-size:13px;
        padding:5px 5px 5px 5px;
        border-radius:3px;
    }
    .table{
        width:100%;
        margin-top:20px;
    }
    .table th{
        border:1px solid#E9E9E9;
        padding:10px 10px 10px 10px;
        color:#666;
        font-family:Arial;
        background:rgba(0,0,0,0.2);
        font-size:14px;
    }
    .beli{
        width:45px;
        margin:0 auto;
        text-align:center;
        color:#FFF;
        font-family:Arial Narrow;
        padding:4px 0px 4px 0px;
        background:#15B4FF;
        border-radius:2px;
    }
    .table td{
        border:1px solid#E9E9E9;
        padding:10px 5px 10px 5px;
        color:#666;
        font-family:Arial;
        font-size:14px;
    }
    .paging{
        float:left;
        margin-left:5px;
        background:#00A3F0;
        border-radius:3px;
        color:#fff;
        padding:3px 0px 3px 0px;
    }
    .paging a{
        border-radius:3px;
        color:#fff;
        padding:4px 9px 4px 9px;
    }
    .active-paging{
        background:#FF5151;
    }
    .hapus{
        width:45px;
        margin:0 auto;
        text-align:center;
        color:#FFF;
        font-family:Arial Narrow;
        padding:4px 0px 4px 0px;
        background:#FF4848;
        border-radius:2px;
    }
    .tran-left{
        width:50%;
        float:left;
        height:auto;
        margin-bottom:20px;
    }
    .tran-right{
        width:49.5%;
        float:left;
        height:auto;
    }
    .cet-left{
        width:50%;
        float:left;
        height:auto;
        margin-bottom:20px;
    }
    .cet-right{
        width:49.5%;
        float:left;
        height:auto;
    }
    .label{
        font-family:Arial;
        color:#666;
        font-size:16px;
    }
    input[name="kode_buku"]{
        width:81%;
        height:27px;
        float:left;
        margin-bottom:5px;
        color:#666;
        padding-left:2%;
        border-radius:3px;
        border:1px solid#CCC;
    }
    input[name="judul"],[name="penulis"],[name="kode_beli"],[name="nama"],[name="penerbit"],[name="harga"],[name="stok"],[name="jumlah"],[name="ppn"],[name="diskon"]{
        width:92%;
        height:27px;
        color:#666;
        padding-left:2%;
        margin-bottom:5px;
        border-radius:3px;
        border:1px solid#CCC;
    }
    input[name="cetak"]{
        width:92%;
        height:27px;
        color:#666;
        padding-left:2%;
        margin-bottom:5px;
        border: none;
    }
    input[name="bayar"],[name="kembalian"]{
        width:100%;
        height:27px;
        color:#666;
        padding-left:2%;
        margin-bottom:5px;
        border-radius:3px;
        border:1px solid#CCC;
    }
    .cbook{
        padding:5px 0px 6px 0px;
        background:#00ACFF;
        width:10%;
        margin-left:1%;
        color:#fff;
        border-radius:3px;
        font-family:Arial Narrow;
        text-align:center;
        float:left;
    }
    input[name="tam-ker"]{
        border:none;
        background:#0098E1;
        border-radius:3px;
        padding:7px 7px 7px 7px;
        color:#fff; 
    }
    input[name="beli"]{
        border:none;
        float: right;
        margin-bottom: 10px;
        margin-top: 20px;
        background:#0098E1;
        border-radius:3px;
        padding:8px 8px 8px 8px;
        color:#fff; 
    }
    .ok{
        width:70px;
        padding:8px 0px 8px 0px;
        background:#00A9FB;
        color:#fff;
        margin-left: 4px;
        text-align:center;
        border-radius:3px;
        margin-top:20px;
        float:right;
        margin-bottom:20px;
        font-family:Arial Narrow;
    }
    .ker{
        width:100%;
        margin-top:10px;
    }
    .ker th{
        border:1px solid#E9E9E9;
        padding:10px 10px 10px 10px;
        color:#666;
        font-family:Arial;
        background:rgba(0,0,0,0.2);
        font-size:14px;
    }
    .ker td{
        border:1px solid#E9E9E9;
        padding:10px 5px 10px 5px;
        color:#666;
        font-family:Arial;
        font-size:14px;
    }
    .footer{
        width:100%;
        height:40px;
        background:#6B6B6B;
        margin-top:50px;
    }
    .font-footer{
        text-align:center;
        color:#CCC;
        font-family:Arial Narrow;
        font-size:15px;
        padding-top:9px;
    }
    .header-lap{
        width:100%;
        height:70px;
        margin-bottom:40px;
        font-family:Arial;
        font-size:20px;
        color:#666;
        text-align:center;
        padding-top:20px;
        border-bottom:1px solid#EEE;
    }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cetak Laporan</title>
</head>

<body>
    <div class="header-lap">
       Excellent Hospitality Collage<br />
       <font size="-1">Jalan Raya Adipala – Maos Rt.02 Rw.01 No.100 Desa Kalikudi Kecamatan Adipala Kabupaten Cilacap, Jawa Tengah - Indonesia (53271)</font>
   </div>
   <table class="ker" cellpadding="0" cellspacing="0">
       <tr>
        <th width="7%">No</th>
           <th>Nama</th>
           <th>Email</th>
           <th>Alamat</th>
           <th>No HP</th>
           <th>Jenis Kel.</th>
           <th>Keg. Saat Ini</th>
       </tr>
       <?php 
            $no=1;
            foreach ($pendaftar as $p => $row) {
        ?>
       <tr>
           <td><?=$no++;?></td>
           <td><?=$row->nama;?></td>
           <td><?=$row->email;?></td>
           <td><?=$row->alamat;?></td>
           <td><?=$row->no_hp;?></td>
           <td><?=$row->j_kel;?></td>
           <td><?=$row->kegiatan;?></td>
       </tr>
   <?php } ?>
   </table>
</body>
<script type="text/javascript">
	window.print();
</script>
</html>