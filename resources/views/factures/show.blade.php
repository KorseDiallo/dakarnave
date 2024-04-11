@extends('layout.index')
@section('content')

<div class="row g-4 settings-section">
	<div class="col-12 col-md-4">
		<h3 class="section-title">Détail client</h3>
		<div class="section-intro">Voir Les Détails Du Client</div>
	</div>



	<div class="row gy-4">
					<!--Debut de la fiche ici-->
	                <div class="col-12 col-lg-12">
		                <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-center">
						   
						 
		
		
		<div>
			<div style="clear:both">
				<p style="margin-top:30pt; margin-bottom:0pt; line-height:normal">
					<img src="data:image/jpeg;base64,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" width="196" height="45" alt="LOGOTIPO DKN RCA" >
				</p>
			</div>
			<p style="margin-top:0pt; margin-bottom:10pt; text-align:right; line-height:normal; font-size:9pt">
				<span style="font-family:Arial">&#xa0;</span>
			</p>
			<p style="margin-top:0pt; margin-bottom:10pt; text-align:right; line-height:normal; font-size:9pt">
				<span style="font-family:Arial">Dakar, le </span><u><span style="font-family:Arial; ">{{$facture->created_at}}</span></u>
			</p>
			<p style="margin-top:0pt; margin-left:375.65pt; margin-bottom:10pt; text-align:justify; line-height:normal; font-size:9pt">
				<strong><span style="font-family:Arial; ">DOIT</span></strong>
			</p>
			<table cellspacing="0" cellpadding="0" style="margin-right:7.05pt; margin-left:7.05pt; border-collapse:collapse; float:right">
				<tr style="height:63.5pt">
					<td style="width:164.75pt; padding-right:3.5pt; padding-left:3.5pt; vertical-align:top">
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">KOMAYA SHIPPING CO. (UK) LTD</span>
						</p>
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">13-13-07, 1, KIM SENG PROMENADE,</span>
						</p>
						<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">GREAT WORLD CITY, </span>
						</p>
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:justify; font-size:9pt">
							<span style="height:0pt; text-align:left; display:block; position:absolute; z-index:-1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOgAAABWCAYAAADFadp9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAC6SURBVHhe7dNhBoBAFEbR2f+mK0nEiObXjXP4vLeBOw7bxwFrZj297XQ/QIZAIUygECZQCBMohAkUwgQKYQKFMIFCmEAhTKAQJlAIEyiECRQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4Ge26wIdd5cChR6BQphAIUygECZQCBMohAkUwgQKYQKFMIFCmEAhTKAQ9gj0y4A1s57eBgAsGGMHLOZknIi2zxgAAAAASUVORK5CYII=" width="232" height="86" alt="" style="margin-top:-30.45pt; margin-left:-3.75pt; position:absolute" ></span><span style="font-family:Arial; background-color:#ffff00">SINGAPORE 237994</span><span style="font-family:Arial"> </span>
						</p>
					</td>
				</tr>
			</table>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
				<span style="font-family:Arial">Boulevard du Centenaire de la commune de Dakar</span>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
				<span style="font-family:Arial">P.O. Box</span><span style="font-family:Arial">&#xa0;</span><span style="font-family:Arial">:438 – DAKAR - Senegal</span>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; line-height:115%; font-size:9pt">
				<span style="font-family:Arial">Tél.</span><span style="font-family:Arial">&#xa0;</span><span style="font-family:Arial">: +221 33 8491001 Fax</span><span style="font-family:Arial">&#xa0;</span><span style="font-family:Arial">: +221 33 8238399</span><span style="font-family:Arial">&#xa0; </span>
			</p>
			<p style="margin-top:0pt; margin-bottom:10pt; text-align:justify; line-height:115%; font-size:9pt">
				<span style="font-family:Arial">&#xa0;</span>
			</p>
			<table cellspacing="0" cellpadding="0" style="width:182.15pt; margin-left:374.2pt; border-collapse:collapse">
				<tr style="height:1pt">
					<td style="width:68.85pt; padding-right:3.5pt; padding-left:3.5pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">Commande nº</span><span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:99.3pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:3.5pt; padding-left:3.5pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">{{$facture->numeroCommande}}</span>
						</p>
					</td>
				</tr>
				<tr style="height:1pt">
					<td style="width:68.85pt; padding-right:3.5pt; padding-left:3.5pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">Référence</span><span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:99.3pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:3.5pt; padding-left:3.5pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
						<span style="font-family:Arial; background-color:#ffff00">numéro référence</span>
						</p>
					</td>
				</tr>
			</table>
			<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:10pt">
				<strong><span style="font-family:Arial; ">FACTURE Nº 0007315</span></strong>
			</p>
			<table cellspacing="0" cellpadding="0" style="width:100%; border-collapse:collapse">
				<tr style="height:10.95pt">
					<td colspan="5" style="border-top-style:solid; border-top-width:1.5pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:10pt">
							<strong><u><span style="font-family:Arial; background-color:#ffff00">M.V. CHELSEA</span></u></strong>
						</p>
					</td>
					<td rowspan="6" style="width:9%; border-top-style:solid; border-top-width:1.5pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:top">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:10pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td rowspan="6" style="width:9.58%; border-top-style:solid; border-top-width:1.5pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:10pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:6.25pt">
					<td style="width:2.56%; border-left-style:solid; border-left-width:1.5pt; padding-right:3.5pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td colspan="2" style="padding-right:3.5pt; padding-left:3.5pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; font-size:9pt">
							<span style="font-family:Arial">REPAIRS COMMENCED:</span>
						</p>
					</td>
					<td colspan="2" style="border-right-style:solid; border-right-width:0.75pt; padding-right:3.12pt; padding-left:3.5pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">16/02/2008</span>
						</p>
					</td>
				</tr>
				<tr style="height:9.25pt">
					<td style="width:2.56%; border-left-style:solid; border-left-width:1.5pt; padding-right:3.5pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td colspan="2" style="padding-right:3.5pt; padding-left:3.5pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; font-size:9pt">
							<span style="font-family:Arial">REPAIRS COMPLETED</span><span style="font-family:Arial">&#xa0;</span><span style="font-family:Arial">:</span>
						</p>
					</td>
					<td colspan="2" style="border-right-style:solid; border-right-width:0.75pt; padding-right:3.12pt; padding-left:3.5pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">04/03/2008</span>
						</p>
					</td>
				</tr>
				<tr style="height:5.15pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:8.15pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<u><span style="font-family:Arial; ">DRY-DOCK REPAIRS AS PER DETAILS HEREWITH ATTACHED:</span></u>
						</p>
					</td>
				</tr>
				<tr style="height:4.05pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:7.05pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<strong><u><span style="font-family:Arial; ">ORIGINAL INVOICES:</span></u></strong>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:9.4pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-left:14.2pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">Draft of Bill with a gross lumpsum of</span>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">EUR</span>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">80.135,00</span>
						</p>
					</td>
				</tr>
				<tr style="height:5.25pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-left:14.2pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:8.95pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:4.85pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<strong><u><span style="font-family:Arial; ">INVOICE SETTLEMENT:</span></u></strong>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:7.85pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-left:14.2pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">Reduction due to invoice discussion</span>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">EUR</span>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">1.135,00</span>
						</p>
					</td>
				</tr>
				<tr style="height:8.8pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-left:14.2pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">Reduction due to vessel discount</span>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">EUR</span>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">2.370,00</span>
						</p>
					</td>
				</tr>
				<tr style="height:10.35pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-left:14.2pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">Reduction due to fleet discount</span>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">EUR</span>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">4.598,00</span>
						</p>
					</td>
				</tr>
				<tr style="height:9.05pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:9.05pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:7.95pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<strong><u><span style="font-family:Arial; ">FINAL SETTLEMENT:</span></u></strong>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<strong><span style="font-family:Arial; ">&#xa0;</span></strong>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<strong><span style="font-family:Arial; ">&#xa0;</span></strong>
						</p>
					</td>
				</tr>
				<tr style="height:3.9pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-left:14.2pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">Final Net Invoice</span>
						</p>
					</td>
					<td style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<strong><span style="font-family:Arial; ">EUR</span></strong>
						</p>
					</td>
					<td style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<strong><span style="font-family:Arial; ">72.032,00</span></strong>
						</p>
					</td>
				</tr>
				<tr style="height:6.85pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-left:14.2pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td rowspan="5" style="width:9%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
					<td rowspan="5" style="width:9.58%; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:9.85pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<strong><u><span style="font-family:Arial; ">PAYMENT CONDITIONS:</span></u></strong>
						</p>
					</td>
				</tr>
				<tr style="height:76.65pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:top">
						<p style="margin-top:0pt; margin-left:8.5pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">- Eighty per cent (80%) of the yard rough estimated total repair cost is to be paid before completion of repairs.</span>
						</p>
						<p style="margin-top:0pt; margin-left:8.5pt; margin-bottom:0pt; text-align:justify; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">- Balance is to be paid within thirty (30) days after completion of repairs.</span>
						</p>
						<p style="margin-top:0pt; margin-left:8.5pt; margin-bottom:10pt; text-align:justify; font-size:9pt">
							<span style="font-family:Arial; background-color:#ffff00">- Interest will be charged on deferred payments at a monthly compound rate of 2%.</span>
						</p>
					</td>
				</tr>
				<tr style="height:9.95pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<strong><u><span style="font-family:Arial; ">BANK ACCOUNT DETAILS:</span></u></strong>
						</p>
					</td>
				</tr>
				<tr style="height:50.65pt">
					<td colspan="5" style="border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-right:14.1pt; margin-bottom:0pt; font-size:9pt">
							<span style="font-family:Arial">BANK CREDIT SENEGAL</span>
						</p>
						<p style="margin-top:0pt; margin-right:14.1pt; margin-bottom:0pt; font-size:9pt">
							<span style="font-family:Arial">AGENCE PRINCIPAL DE DAKAR</span>
						</p>
						<p style="margin-top:0pt; margin-right:14.1pt; margin-bottom:0pt; font-size:9pt">
							<span style="font-family:Arial">BD DJILY MBAYE x RUE HUART BP 56 – DAKAR – SENEGAL</span>
						</p>
						<p style="margin-top:0pt; margin-right:14.1pt; margin-bottom:0pt; font-size:9pt">
							<span style="font-family:Arial">ACCOUNT NO. SN12 SN060 01030 609488064000 95</span>
						</p>
						<p style="margin-top:0pt; margin-right:14.1pt; margin-bottom:0pt; font-size:9pt">
							<span style="font-family:Arial">BANK SWIFT CODE: BCMASNDA</span>
						</p>
						<p style="margin-top:0pt; margin-right:14.1pt; margin-bottom:0pt; font-size:9pt">
							<span style="font-family:Arial">BENEFICIARY: DAKARNAVE BOULEVARD DE LA COMUNE DE DAKAR BP 438</span>
						</p>
						<p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
							<span style="font-family:Arial">DAKAR SENEGAL</span>
						</p>
						<p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
							<strong><u><span style="font-family:Arial; ">CORRESPONDENT BANK:</span></u></strong>
						</p>
						<p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
							<span style="font-family:Arial">CRÉDIT AGRICOLE SA</span>
						</p>
						<p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
							<span style="font-family:Arial">78042 GUYANCOURT CEDEX</span>
						</p>
						<p style="margin-top:0pt; margin-bottom:0pt; font-size:9pt">
							<span style="font-family:Arial">FRANCE</span><br ><span style="font-family:Arial">IBAN: FR76 30006 00001 20534 66300 045 </span><br ><span style="font-family:Arial">SWIFT: AGRIFRPP</span>
						</p>
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:9.8pt">
					<td colspan="4" style="border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; padding-right:3.12pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<strong><span style="font-family:Arial; ">H.T.</span></strong>
						</p>
					</td>
					<td style="width:39.76%; border-style:solid; border-width:0.75pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; text-align:center; line-height:115%; font-size:9pt">
							<strong><span style="font-family:Arial; ">T.V.A.</span></strong>
						</p>
					</td>
					<td rowspan="2" style="width:9%; border-style:solid; border-width:0.75pt 0.75pt 1.5pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<strong><span style="font-family:Arial; ">NET EUR</span></strong>
						</p>
					</td>
					<td rowspan="2" style="width:9.58%; border-style:solid; border-width:0.75pt 1.5pt 1.5pt 0.75pt; padding-right:2.75pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<strong><span style="font-family:Arial; ">72.032,00</span></strong>
						</p>
					</td>
				</tr>
				<tr style="height:18.5pt">
					<td colspan="2" style="border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; padding-right:3.5pt; padding-left:2.75pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<strong><span style="font-family:Arial; ">EUR</span></strong>
						</p>
					</td>
					<td colspan="2" style="border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:1.5pt; padding-right:3.12pt; padding-left:3.5pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<strong><span style="font-family:Arial; ">72.032,00</span></strong>
						</p>
					</td>
					<td style="width:39.76%; border-style:solid; border-width:0.75pt 0.75pt 1.5pt; padding-right:3.12pt; padding-left:3.12pt; vertical-align:middle">
						<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
					</td>
				</tr>
				<tr style="height:0pt">
					<td style="width:13.9pt">
					</td>
					<td style="width:12.4pt">
					</td>
					<td style="width:144.65pt">
					</td>
					<td style="width:55.75pt">
					</td>
					<td style="width:216.35pt">
					</td>
					<td style="width:49pt">
					</td>
					<td style="width:52.15pt">
					</td>
				</tr>
			</table>
			<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
				<span style="font-family:Arial">&#xa0;</span>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
				<span style="font-family:Arial">Arrêté la présente facture à la somme de: </span><strong><span style="font-family:Arial; ">SEVENTY TWO THOUSAND AND THIRTY TWO EUROS</span></strong><span style="font-family:Arial">____________________________</span>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:9pt">
				<span style="font-family:Arial">_____________________________________________________________________________________________________________</span>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%; font-size:9pt">
				<span style="font-family:Arial">Le Directeur Commercial, </span>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:10pt">
				<strong><span style="line-height:115%; font-family:Arial; font-size:9pt; ">CLIENT</span></strong>
			</p>
			<p style="margin-top:0pt; margin-bottom:10pt; line-height:115%; font-size:9pt">
				<br style="page-break-before:always; clear:both" >
			</p>
			

		</div>

			

			
   
						   
						</div><!--//app-card-->
	                </div><!--//col-->
<!--Fin  de la fiche ici-->

                
<div style="overflow-y: auto; width: 1000px; height:350px">
	<!--Debut de la card et de la boucle ici-->
	
	<div class="w-100 mt-5">
		<div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
			<div class="app-card-header p-3 border-bottom-0">
				<div class="row align-items-center gx-3">
					<div class="col-auto">
						<div class="app-icon-holder">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
								<path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
							</svg>
						</div><!--//icon-holder-->

					</div><!--//col-->
					<div class="col-auto">
						<h4 class="app-card-title">Facture</h4>
					</div><!--//col-->
				</div><!--//row-->
			</div><!--//app-card-header-->
			<div class="app-card-body px-4 w-100">
				<div class="item  py-3">
					<div class="row   mb-5 w-50">
						<div class="col mb-2">
							<div class="item-label d-flex justify-content-between">
								<span class="item-label text-start"><strong>Numero Commande:</strong></span>
								<span class="item-data text-end">1500</span>
							</div>
							<div class="item-label d-flex justify-content-between">
								<span class="item-label text-start"><strong>Reference:</strong></span>
								<span class="item-data text-end">3665</span>
							</div>

						</div><!--//col-->
					</div><!--//row-->

					<div class="row align-items-center mb-2 w-50  mt-5">
						<div class="item-label d-flex justify-content-between">
							<span class="item-label text-start"><strong>Numéro Facture:</strong></span>
							<span class="item-data text-end">5000</span>
						</div>
					</div>


					<div class="row  align-items-center mb-3 ">


						<div class="col">
							<div class="item-label d-flex justify-content-between">
								<span class="item-label text-start"><strong>Debut travaux:</strong></span>
								<span class="item-data text-end">522</span>
							</div>
							<div class="item-label d-flex justify-content-between">
								<span class="item-label text-start"><strong>Fin travaux:</strong></span>
								<span class="item-data text-end">5200</span>
							</div>

						</div><!--//col-->


						<div class="col">
							<div class="item-label d-flex justify-content-between">
								<span class="item-label text-start"><strong>Montant Brut:</strong></span>
								<span class="item-data text-end">055 EUR</span>
							</div>
							<div class="item-label d-flex justify-content-between">
								<span class="item-label text-start"><strong>Reduction Discussion:</strong></span>
								<span class="item-data text-end">500 EUR</span>
							</div>
							<div class="item-label d-flex justify-content-between">
								<span class="item-label text-start"><strong>Reduction Rabais Flott:</strong></span>
								<span class="item-data text-end">2500 EUR</span>
							</div>
							<div class="item-label d-flex justify-content-between">
								<span class="item-label text-start"><strong>Reduction Rabais Navire:</strong></span>
								<span class="item-data text-end">744 EUR</span>
							</div>
						</div>
					</div><!--//col-->
				</div><!--//row-->
				<div class="row   mb-5 w-50">
					<div class="col mb-2">
						<div class="item-label d-flex justify-content-between">
							<span class="item-label text-start"><strong>Langue:</strong></span>
							<span class="item-data text-end">411</span>
						</div>
						<div class="item-label d-flex justify-content-between">
							<span class="item-label text-start"><strong>Devise:</strong></span>
							<span class="item-data text-end">755</span>
						</div>
						<div class="item-label d-flex justify-content-between">
							<span class="item-label text-start"><strong>Valider:</strong></span>
							<span class="item-data text-end">855</span>
						</div>

					</div><!--//col-->
				</div><!--//row-->

				<div class="row   mb-5 w-50">
				<div class="col mb-2">
				<div class="item-label ">
							<span class="item-label "><strong>Details Travaux:</strong></span>
							<span class="item-data ">633</span>
						</div>
				</div>
				</div>

			</div>
		</div><!--//app-card-->
	</div><!--//col-->

	<!--Fin de la card et de la boucle ici-->
	
	<div class="w-100 mt-5" style="text-align: center;">
		<h3>Aucune facutre pour l'instant</h3>
	</div>
	
</div>


                </div><!--//row-->
</div><!--//table-responsive-->


@endsection