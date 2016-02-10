<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("SEZ location");
?>
	<div class="main ">
		<section class="top_block_main">
			<div class="container">
				<!--Хеебный крош--> <?$APPLICATION->IncludeComponent(
					"custom:breadcrumb",
					"",
					Array(
						"COMPONENT_TEMPLATE" => "oez",
						"START_FROM" => "0",
						"PATH" => "",
						"SITE_ID" => "s1"
					)
				);?> <!--Хлебные крошки-->
				<h3><?=$APPLICATION->GetTitle();?></h3>
				<div class="row" style="padding-left: 15px;">
					<p>
						The Lipetsk Special Economic Zone is located in the center of European Russia, offering improved logistics and reduced transportation costs.<img width="500" alt="34.png" src="/upload/medialibrary/b7d/b7d0939684998dab65df9bf9dcbd2a71.png" height="543" title="34.png" align="right" style="margin-right: 10px;">
					</p>
					<br>
					<p>
						450 kilometers to Moscow
					</p>
					<p>
						<img width="78" alt="33.png" src="/upload/medialibrary/da6/da62e8c37384b1c3e5dedddbaa1c792a.png" height="74" title="33.png" align="left" style="margin-right: 10px;"><br>
					</p>
					<p>
						Convenient access to M-4 and M-6 federal highways
					</p>
					<p>
						<br>
					</p>
					<p>
						<img width="78" alt="44.png" src="/upload/medialibrary/f0e/f0ea6fecf862c97d0746e26cbdddea4a.png" height="81" title="44.png" align="left" style="margin-right: 10px;"><br>
					</p>
					<p>
						35 kilometers to the international airport
					</p>
					<p>
						<br>
					</p>
					<p>
						<img width="77" alt="55.png" src="/upload/medialibrary/2ef/2ef8b633fec4cb9d4c1ecd02ff24513e.png" height="76" title="55.png" align="left" style="margin-right: 10px;"><br>
					</p>
					<p>
						Internal railroads connected with the federal railway line
					</p>
				</div>
				<div class="row" style="padding-left: 15px;">
					<p>
						The Lipetsk Special Economic Zone is located in the municipality of Gryazi, Lipetsk Region, in close proximity to Lipetsk (pop. 500,000) and Gryazi (pop. 50,000).
					</p>
					<br>
					<p>
						<img width="500" alt="11.png" src="/upload/medialibrary/3d8/3d89d674c6a9c0a99c9d7eaa3be0828a.png" height="342" title="11.png" align="left"><br>
					</p>
					<p>
						<br>
					</p>
					<p>
						<br>
					</p>
					<p>
						. Lipetsk SEZ is located between two railway stations:
					</p>
					<p>
						- Kazinka (0.2 km)
					</p>
					<p>
						- Gryazi-Orlovskie (8 km) Also in close proximity to Lipetsk SEZ are two railway passenger stations – Lipetsk (20 km) and Gryazi Voronezhskie (10 km). Lipetsk SEZ railway roads are linked with the Kazinka station.
					</p>
				</div>
			</div>
		</section>
	</div>
	<br>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>