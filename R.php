<!DOCTYPE html>
<html>
        <head>
                <title></title>
        </head>
        <script type="text/javascript">

        </script>
        <style type="text/css">
                .docu {
                        text-align : center;
                }

        </style>
        <body>
        <!-- docu -->
        <div class = "docu">
		<form action='R.php' method='get'>
			input n value : <input type='text' name='n' />
				<input type='submit' />
		</form>
	<?php
		if(isset($_GET['n'])) {
		$n = $_GET['n'];

		/* $str = '"C:\Program Files\R\R-[����]\bin\Rscript"' . ' .\[�ҭn���檺 R �ɦW].R' ." $[����]";*/
		 $str = '"C:\Program Files\R\R-3.4.1\bin\Rscript"' . ' .\script.R' ." $n";

		/* �H�~�����O���覡�I�s R �i��ø�� */

			shell_exec($str);		
		/* ���Ͷü� */
		$nocache = rand();

		/* ��X���� */
		echo("<img src='output/hist.png?$nocache' />");
		}
	?>
        </div>
        </body>
</html>