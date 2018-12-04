<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<style>
		:root{
			--main-color : #0D2C54;
		}
		@font-face {
			font-family: Arial;
			src: url('../fonts/arial.ttf');
		}
		#item_table {
			border-collapse: collapse;
		}
		#item_table thead {
			text-align: center;
			font-family: Arial;
			font-weight: bold;
			font-size: 10px;
			color: #FFFFFF;
			background-color: VAR(--main-color);
			
		}
		#item_table tr {
			height: 25px;
		}
		#item_table tbody tr {
			font-family: Arial; 
			font-size: 10px;			
		}
		#item_table>tbody>tr>td {
			border-bottom: 1px solid #ddd;
			border-right: 1px solid var(--main-color);
			border-left: 1px solid var(--main-color);
		}
		#item_table>tr:last-child { border: none; }
	</style>
</head>

<body>
	<div style="height:250mm; margin: 0px; width:100%; max-width: 216mm; position:relative;">
		<table width="100%" class="table_printing" style="border-collapse: collapse;">
			<tr>
				<td rowspan="2" align="left"><img src="images/logo.jpg" height="100px"></td>
				<td align="right" style="font-size:25pt; color: var(--main-color); font-family: Arial;">PURCHASE ORDER</td>
			</tr>
			<tr>
				<td align="right">
					<table width="50%" style="font-family: Arial; font-size: 10px;">
						<tr><td width="33%" style="text-align: right; padding-right: 10px;">Date</td><td width="77%">NOVEMBER 29, 2018</td></tr>
						<tr><td style="text-align: right; padding-right: 10px;">PO#</td><td>101910</td></tr>
						<tr><td style="text-align: right; padding-right: 10px;">Project No.</td><td>23210</td></tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<table width="100%">
						<tr>
							<td valign="top" width="50%">
								<table width="100%">
									<tr><td style="font-family: Arial; font-size: 14px;">Handwerk Interiors Cop.</td></tr>
									<tr>
										<td style="font-family: Arial; font-size: 10px;">
										2120 Kinburn Side Road,<br/>
										Ottawa ON K0A 2H0, Canada<br/>
										Ph.: 613-321-1526<br/>
										Email: info@handwerk.ca<br/>
										Website: www.handwerk.ca<br/>
										</td>
									</tr>
								</table>
							</td>
							<td valign="top" width="50%">
								<table width="100%">
									<tr><td style="font-family: Arial; font-size: 10px; text-decoration: underline;">Contact Person:</td></tr>
									<tr>
										<td style="font-family: Arial; font-size: 10px;">
										Sampple Jackson<br/>
										Mobile: +1(343)293-XXXX<br/>
										Mobile: +1(343)293-XXXX<br/>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<table width="100%">
						<tr valign="top">
							<td width="50%">
								<table width="100%">
									<tr>
										<td style="background-color: var(--main-color); text-align: center; color: #FFFFFF; font-size: 11px; font-weight: bold; font-family: Arial; padding: 5px;">VENDOR DETAILS</td>
									</tr>
									<tr>
										<td style="font-family: Arial; font-size: 10px;">
											Mr. Pardeep Kanwar<br/>
											C/o. Hewlett Packard<br/>
											14231 Tandem Balvd., Austin TX 787 28<br/>
											Mobile: 1.800.888.XXXX<br/>
											FAX: 1.800.888.XXXX<br/>
										</td>
									</tr>
								</table>
							</td>
							<td width="50%">
								<table width="100%">
									<tr>
										<td style="background-color: var(--main-color); text-align: center; color: #FFFFFF; font-size: 11px; font-weight: bold; font-family: Arial; padding: 5px;">SHIPPING ADDRESS</td>
									</tr>
									<tr>
										<td style="font-family: Arial; font-size: 10px;">
											Handwerk Interiors Corp.<br/>
											2120 Kinburn Side Road,<br/>
											Ottawa, ON K0A 2H0, Canada<br/>
											Ph.: (613)321-1526
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="border-bottom: 1px solid var(--main-color)">
					<table width="100%" id="item_table">
						<thead>
						<tr>
							<td width="6%">Sl.</td>
							<td width="10%">Item ID</td>
							<td width="34%">Description</td>
							<td width="12%">Qty.</td>
							<td width="12%">Unit Price</td>
							<td width="12%">TAX</td>
							<td width="12%">Total</td>
						</tr>
						</thead>
						<tbody>
							<?php
								for($row=1;$row<=15;$row++){ ?>
						<tr>
							<td style="text-align-last: center;"><?php echo $row; ?></td>
							<td style="text-align: center;">AOC504</td>
							<td>Sample item related to wood</td>
							<td>2 Pcs.</td>
							<td style="text-align: right;">1,234.00</td>
							<td style="text-align: right;">13.00%</td>
							<td style="text-align: right;">2,468.00</td>
						</tr>
								
							<?php
								}
							?>
						<tr valign="top">
							<td colspan="5">
								<table width="100%" style="border-collapse: collapse;">
									<tr style="text-align: center; font-family: Arial; font-weight: bold; font-size: 10px; color: #FFFFFF; background-color: var(--main-color); height: 25px;">
										<td colspan="2">TERMS & CONDITIONS</td>
									</tr>
									<tr style="font-family: Arial; font-size: 10px;">
										<td width="50%">
											<ul>
												<li>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</li>
												<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
											</ul>
										</td>
										<td width="50%">
											<ul>
												<li>Ut wisi etation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo con duis.</li>
												<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
											</ul>
										</td>
									</tr>
								</table>
								<table width="100%" style="border-collapse: collapse; margin-top: 10px;">
									<tr style="text-align: center; font-family: Arial; font-weight: bold; font-size: 10px; color: #FFFFFF; background-color: var(--main-color); height: 25px;">
										<td>NOTES</td>
									</tr>
									<tr style="font-family: Arial; font-size: 10px;">
										<td>
											<ul>
												<li>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</li>
												<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
											</ul>
										</td>
									</tr>
								</table>
							</td>
							<td colspan="2">
								<table id="calculations" width="100%" style="font-family: Arial; font-size: 10px; border-collapse: collapse;">
									<tr style=" height: 25px; border-bottom: 1px solid #ddd;"><td width="50%">Subtotal</td><td style="text-align: right;" width="50%;">2,678.00</td></tr>
									<tr style=" height: 25px; border-bottom: 1px solid #ddd;"><td>Taxable</td><td style="text-align: right;">2,678.00</td></tr>
									<tr style=" height: 25px; border-bottom: 1px solid #ddd;"><td>Tax Rate</td><td style="text-align: right;">13.00%</td></tr>
									<tr style=" height: 25px; border-bottom: 1px solid #ddd;"><td>TAX Amt.</td><td style="text-align: right;">348.14</td></tr>
									<tr style=" height: 25px; border-bottom: 1px solid #ddd;"><td>Shipping</td><td style="text-align: right;">100.00</td></tr>
									<tr style=" height: 25px; border-bottom: 1px solid #ddd;"><td>Others</td><td style="text-align: right;">0.00</td></tr>
									<tr style=" height: 25px; border-bottom: 1px solid #ddd;"><td>Total</td><td style="text-align: right;">3,126.14</td></tr>
								</table>
								<table width="100%" style="font-family: Arial; font-size: 10px; margin-top: 20px;">
									<tr><td>_________________________</br>Signature</td></tr>
								</table>
							</td>
						</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
