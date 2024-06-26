@extends('layout.index')
@section('content')

<div class="row g-4 settings-section">
	<div class="col-12 col-md-4">
		<h3 class="section-title">Détail client</h3>
		<div class="section-intro">Voir Les Détails Du Client</div>
	</div>



	<div class="row gy-4">
		<!--Debut de la fiche ici-->
		<div class="col-12 col-lg-10">
			<div class="app-card app-card-account shadow-sm d-flex flex-column align-items-center">




				<!-- Page 1 -->
				

				<div id="page1-div" style="position:relative;width:100%;height:1262px; padding-left:30px">
					<img width="100px" height="100px" style="margin:30px 0px 30px 30px;" src="assets/images/user.png" alt="background image" />
					<div style="border: 1px solid black;  padding:0 ;width:91%;height:1170px;">
					<p style="position:absolute;top:109px;left:201px;white-space:nowrap" class="ft00"><b>MEMO&#160;OF&#160;AGREEMENT&#160;/&#160;SETTLEMENT</b></p>
					
					<p style="position:absolute;top:160px;left:54px;white-space:nowrap" class="ft00"><b>REF.:{{$memo->facture->client->nom}}</b></p>
				
					<p style="position:absolute;top:150px;left:457px;white-space:nowrap" class="ft00"><b>ORDER Nº</b> {{$memo->facture->numeroCommande}}</p>
					
					<p style="position:absolute;top:202px;left:42px;white-space:nowrap" class="ft01"><b>CLIENT:{{$memo->facture->client->raisonSocial}}</b></p>
					<p style="position:absolute;top:229px;left:107px;white-space:nowrap" class="ft01"><b>REPAIRS&#160;COMMENCED:</b></p>
					
					<p style="position:absolute;top:229px;left:359px;white-space:nowrap" class="ft02">{{ date('d-m-Y', strtotime($memo->facture->debutTravaux)) }}</p>
					<p style="position:absolute;top:247px;left:107px;white-space:nowrap" class="ft01"><b>VESSEL&#160;DOCKED:</b></p>
					<p style="position:absolute;top:247px;left:359px;white-space:nowrap" class="ft02">{{date('d-m-Y', strtotime($memo->amarrageNavire))}}</p>
					<p style="position:absolute;top:264px;left:107px;white-space:nowrap" class="ft01"><b>VESSEL&#160;UNDOCKED:</b></p>
					<p style="position:absolute;top:264px;left:359px;white-space:nowrap" class="ft02">{{date('d-m-Y', strtotime($memo->desamarrageNavire))}}</p>
					<p style="position:absolute;top:281px;left:107px;white-space:nowrap" class="ft01"><b>REPAIRS&#160;COMPLETED:</b></p>
					
					<p style="position:absolute;top:281px;left:359px;white-space:nowrap" class="ft02">{{date('d-m-Y',strtotime($memo->facture->finTravaux))}}</p>
					<p style="position:absolute;top:307px;left:40px;white-space:nowrap" class="ft04">WE,&#160;THYE&#160;UNDERSIGNED,&#160;HAVE&#160;ON&#160;THIS&#160;DATE&#160;{{ now()->format('d-m-Y') }}&#160;AGREED&#160;ON&#160;THE&#160;FOLLOWING&#160;<br />SETTLEMENT&#160;OF&#160;REPAIR&#160;ACCOUNT&#160;OF&#160;THE&#160;ABOVE&#160;VESSEL.</p>
					<p style="position:absolute;top:351px;left:40px;white-space:nowrap" class="ft01"><b>PAYMENT&#160;CONDITIONS:</b></p>
					<p style="position:absolute;top:368px;left:40px;white-space:nowrap" class="ft05">Invoice must be agreed&#160;upon before vessel´s&#160;departure from the yard, and&#160;the attending Superintendent&#160;must&#160;<br />be fully authorized&#160;to negotiate and sign&#160;the Repair Invoice as full and&#160;final.</p>
					<p style="position:absolute;top:414px;left:40px;white-space:nowrap" class="ft03">- Eighty per cent (80%) of&#160;the yard rough estimated&#160;total repair cost is to be paid&#160;before completion of repairs.</p>
					<p style="position:absolute;top:445px;left:40px;white-space:nowrap" class="ft03">- Balance is to be paid&#160;within thirty (30) days after completion&#160;of repairs.</p>
					<p style="position:absolute;top:476px;left:40px;white-space:nowrap" class="ft03">- Interest will be charged&#160;on deferred payments&#160;at a monthly compound rate&#160;of 2%.</p>
					<p style="position:absolute;top:559px;left:40px;white-space:nowrap" class="ft01"><b>BANK&#160;ACCOUNT&#160;DETAILS:</b></p>
					<p style="position:absolute;top:578px;left:40px;white-space:nowrap" class="ft04">BANK&#160;CREDIT&#160;SENEGAL<br />AGENCE&#160;PRINCIPAL&#160;DE&#160;DAKAR<br />BD&#160;DJILY&#160;MBAYE&#160;x&#160;RUE&#160;HUART&#160;BP&#160;56&#160;–&#160;DAKAR&#160;–&#160;SENEGAL<br />ACCOUNT&#160;NO.&#160;SN12&#160;SN060&#160;01030&#160;609488064000&#160;95<br />BANK&#160;SWIFT&#160;CODE:&#160;BCMASNDA<br />BENEFICIARY:&#160;DAKARNAVE&#160;BOULEVARD&#160;DE&#160;LA&#160;COMUNE&#160;DE&#160;DAKAR&#160;BP&#160;438<br />DAKAR&#160;SENEGAL</p>
					<p style="position:absolute;top:716px;left:40px;white-space:nowrap" class="ft01"><b>CORRESPONDENT&#160;BANK:</b></p>
					
					 <p style="position:absolute;top:751px;left:40px;white-space:nowrap" class="ft04">{{$memo->facture->client->informationBancaires[0]['nomBanque']}}<br />{{$memo->facture->client->informationBancaires[0]['adresseBancaire']}}<br />{{$memo->facture->client->informationBancaires[0]['pays']}}<br />IBAN: {{$memo->facture->client->informationBancaires[0]['iban']}}<br />SWIFT:{{$memo->facture->client->informationBancaires[0]['swift']}}</p>
					
					<p style="position:absolute;top:853px;left:40px;white-space:nowrap" class="ft01"><b>ORIGINAL&#160;INVOICES:</b></p>
					<p style="position:absolute;top:870px;left:93px;white-space:nowrap" class="ft04">-&#160;Draft&#160;of&#160;Bill&#160;with&#160;a&#160;gross&#160;lumpsum&#160;<br />of</p>
					<p style="position:absolute;top:878px;left:351px;white-space:nowrap" class="ft02">{{$memo->facture->devise}}</p>
					<p style="position:absolute;top:878px;left:409px;white-space:nowrap" class="ft02">{{$memo->facture->montantBrut}}</p>
					<p style="position:absolute;top:913px;left:40px;white-space:nowrap" class="ft01"><b>INVOICE&#160;SETTLEMENT:</b></p>
					<p style="position:absolute;top:930px;left:59px;white-space:nowrap" class="ft02">-&#160;Reduction&#160;due&#160;to&#160;invoice&#160;discussion.</p>
					<p style="position:absolute;top:930px;left:351px;white-space:nowrap" class="ft02">{{$memo->facture->devise}}</p>
					<p style="position:absolute;top:930px;left:409px;white-space:nowrap" class="ft02">{{$memo->facture->reductionDiscussion}}</p>
					<p style="position:absolute;top:948px;left:59px;white-space:nowrap" class="ft02">-&#160;Reduction&#160;due&#160;to&#160;vessel&#160;discount&#160;(3%).</p>
					<p style="position:absolute;top:948px;left:351px;white-space:nowrap" class="ft02">{{$memo->facture->devise}}</p>
					<p style="position:absolute;top:948px;left:409px;white-space:nowrap" class="ft02">{{$memo->facture->reductionRabaisFlotte}}</p>
					<p style="position:absolute;top:965px;left:59px;white-space:nowrap" class="ft02">-&#160;Reduction&#160;due&#160;to&#160;Fleet&#160;Agreement&#160;(6%)</p>
					<p style="position:absolute;top:965px;left:351px;white-space:nowrap" class="ft02">{{$memo->facture->devise}}</p>
					<p style="position:absolute;top:965px;left:409px;white-space:nowrap" class="ft02">{{$memo->facture->reductionRabaisNavire}}</p>
					<p style="position:absolute;top:1019px;left:40px;white-space:nowrap" class="ft01"><b>FINAL&#160;SETTLEMENT:</b></p>
					<p style="position:absolute;top:1019px;left:351px;white-space:nowrap" class="ft01"><b>{{$memo->facture->devise}}</b></p>
					<p style="position:absolute;top:1019px;left:409px;white-space:nowrap" class="ft01"><b>{{$memo->facture->montantBrut - ($memo->facture->reductionDiscussion + $memo->facture->reductionRabaisFlotte + $memo->facture->reductionRabaisNavire)}}</b></p>
					<p style="position:absolute;top:1039px;left:40px;white-space:nowrap" class="ft04">Say<br />:</p>
					<p style="position:absolute;top:1047px;left:86px;white-space:nowrap" class="ft02">SEVENTY&#160;TWO&#160;THOUSAND&#160;AND&#160;THIRTY&#160;TWO&#160;EUROS</p>
					<p style="position:absolute;top:1110px;left:135px;white-space:nowrap" class="ft01"><b>BY&#160;OWNERS</b> <br>{{$memo->owner}}</p>
					<p style="position:absolute;top:1110px;left:461px;white-space:nowrap" class="ft01"><b>BY&#160;DAKARNAVE</b> <br> OMAR BA</p>
					</div>
				</div>






			</div><!--//app-card-->
		</div><!--//col-->
		<!--Fin  de la fiche ici-->





	</div><!--//row-->
</div><!--//table-responsive-->


@endsection