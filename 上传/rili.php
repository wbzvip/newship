<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
<html>

	<head>
		<meta charset="UTF-8">
		<title>我的第一个php万年历</title>
		<meta charset="utf-8" />
        <meta name="Author" content="zhouyg1992">  
        <meta name="Description" content="用php实现的一个简单万年历">  
        <style type="text/css">
        	 table #week {  
                 text-align:center;  
                 background-color:#cccccc;  
            }  
            .weekday {color:red}  
            table tr {  
                text-align:center;  
                background-color:#ffffcc;  
            }  
            #caption {  
                font:bold 20px 幼圆,宋体;  
            }  
            #query {  
                width:500px;  
                height:10px;  
                margin:50px auto;  
                text-align:center;  
            }         	        	       	
        </style>
	</head>
	<body>
		<?php
			$year = $_GET["y"]?$_GET['y']:date("Y");
            $month = $_GET["m"]?$_GET['m']:date("m");
            $weekid = date ('w',mktime(0,0,0,$month,1,$year));//某年某月第一天是星期几。0-7分别代表星期日-星期六  
            $countdays = date('t',mktime(0,0,0,$month,1,$year));//某年某个月的天数  
            //初始化数组$arr_days  
            for ($i = 0; $i <= 41; $i++)  
             {  
                 $arr_days[$i] = " ";  
             }  
  
             //给$arr_days数组赋值  
             for ($i = $weekid, $j = 1; $j <= $countdays; $i++, $j++)  
              {  
                $arr_days[$i] = $j;  
              } 
            
		?>
		<div>
			<form action="rili.php">
			年：<input type="" name="y" id="" value="" />
			月：<input type="" name="m" id="" value="" />
			<button type="submit">查询</button>
			</form>
		</div>
		<table width="500px" height="300px" align="center">
			 <caption><span id="caption"><?php echo $year ?>年<?php echo $month ?>月日历</span></caption>
			 <tr id="week">  
                <td><span class="weekday">Sun</span></td>  
                <td>Mon</td>  
                <td>Tue</td>  
                <td>Wed</td>  
                <td>Thu</td>  
                <td>Fir</td>  
                <td><span class="weekday">Sat</span></td>  
           </tr>
			 <?php  
                //表格输出  
                for ($i = 0; $i <= 41; $i++)  
                {  
                    if ($i % 7 == 0)  
                    {  
                        echo '<tr>';  
                    }  
                    echo '<td>'.$arr_days[$i].'</td>';  
                    if (($i + 1) % 7 == 0)  
                    {  
                        echo '</tr>';  
                    }  
                }  
            ?>  
		</table>
	</body>

</html>