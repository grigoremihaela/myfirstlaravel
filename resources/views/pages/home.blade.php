@extends('app')

@section('content')

	<h3 class="section-title" >Hello world!</h3>
	<small class="section-subtitle">Voluptatem accusantum doloremque</small>
<!-- .react -->
	<div  id="counter"> </div>
<!-- .react -->
	<div class="row">
		<div class="col-md-3 col-sm-6">
			<div class="feature">
				<div class="feature-icon">
				  <a href="{{ url('/posts/') }}">
					<img src="/img/icon-pie-chart.png" alt="" class="icon">
				  </a>
				</div>
				<h3 class="feature-title">{!! link_to('/posts', 'See All Posts') !!}</h3>
				<p>Neque porro quisquam est qui dolorem ipsum quia dolor amet consectetur adipisci velit sed.</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="feature">
				<div class="feature-icon">
				  <a href="{{ url('/posts/postsAuth') }}">
					<img src="/img/icon-lock.png" alt="" class="icon">
				  </a>
				</div>
				<h3 class="feature-title">{!! link_to('/posts/postsAuth', 'Only Your Posts') !!}</h3>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="feature">
				<div class="feature-icon">
				  <a href="{{ url('/users') }}">
					<img src="/img/icon-piggy-bank.png" alt="" class="icon">
				  </a>
				</div>
				<h3 class="feature-title">{!! link_to('/users', 'All Users') !!}</h3>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="feature">
				<div class="feature-icon">
				  <a href="{{ url('/faq') }}">
					<img src="/img/icon-mobile.png" alt="" class="icon">
				  </a>
				</div>
				<h3 class="feature-title">{!! link_to('/faq', 'FAQ') !!}</h3>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
			</div>
		</div>
	</div> <!-- .row -->			
	<p>Postremo ad id indignitatis est ventum, ut cum peregrini ob formidatam haut ita dudum alimentorum inopiam pellerentur ab urbe praecipites, sectatoribus disciplinarum liberalium inpendio paucis sine respiratione ulla extrusis, tenerentur minimarum adseclae veri, quique id simularunt ad tempus, et tria milia saltatricum ne interpellata quidem cum choris.</p>
	<p>Quo cognito Constantius ultra mortalem modum exarsit ac nequo casu idem Gallus de futuris incertus agitare quaedam conducentia saluti suae per itinera conaretur, remoti sunt omnes.</p>
	<p>Eminuit autem inter humilia supergressa iam impotentia fines mediocrium delictorum nefanda Clematii cuiusdam Alexandrini nobilis mors repentina; cuius socrus cum misceri sibi generum, flagrans eius amore, non impetraret, ut ferebatur, per palatii pseudothyrum introducta, oblato pretioso reginae monili id adsecuta est, ut ad Honoratum tum comitem orientis formula missa letali omnino scelere nullo contactus idem Clematius nec hiscere nec loqui permissus occideretur.</p>
	<p>Cuius acerbitati uxor grave accesserat incentivum, germanitate Augusti turgida supra modum, quam Hannibaliano regi fratris filio antehac Constantinus iunxerat pater, Megaera quaedam mortalis, inflammatrix saevientis adsidua, humani cruoris avida nihil mitius quam maritus; qui paulatim eruditiores facti processu temporis ad nocendum per clandestinos versutosque rumigerulos conpertis leviter addere quaedam male suetos falsa et placentia sibi discentes, adfectati regni vel artium nefandarum calumnias insontibus adfligebant.</p>
	<p>Montius nos tumore inusitato quodam et novo ut rebellis et maiestati recalcitrantes Augustae per haec quae strepit incusat iratus nimirum quod contumacem praefectum, quid rerum ordo postulat ignorare dissimulantem formidine tenus iusserim custodiri.</p>
@stop

