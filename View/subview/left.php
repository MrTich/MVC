
<div class="templatemo_content_left_section">
	<h1>Loại sách</h1>
    <ul>
        <?php
        foreach($dataLoai as $k=>$v)
        {
            ?>
             <li><a href="index.php?controller=HomeController&action=SachLoai&maloai=<?php echo $v['maloai'] ?>"><?php echo $v['tenloai'] ?></a></li>
            <?php
        }
       ?>
       
	</ul>
</div>
<div class="templatemo_content_left_section">
	<h1>Bestsellers</h1>
    <ul>
        <li><a href="#">Vestibulum ullamcorper</a></li>
        <li><a href="#">Maece nas metus</a></li>
        <li><a href="#">In sed risus ac feli</a></li>
        <li><a href="#">Praesent mattis varius</a></li>
        <li><a href="#">Maece nas metus</a></li>
        <li><a href="#">In sed risus ac feli</a></li>
        <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
        <li><a href="http://www.templatemo.com" target="_parent">CSS Templates</a></li>
        <li><a href="http://www.webdesignmo.com" target="_parent">Web Design</a></li>
        <li><a href="http://www.photovaco.com" target="_parent">Free Photos</a></li>
	</ul>
</div>

<div class="templatemo_content_left_section">                
    <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
</div>
