<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">

<head>
<title>Search Listings</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript" src="//res.myrealpage.com/wps/js/base.js?z11"></script>
<script src="//res.myrealpage.com/wps/-/js~1/rest/11951/res/listing-presentation.js" type="text/javascript"></script>
<script src="//res.myrealpage.com/wps/js/ng/vow/VowToolbarNG.js?a"></script>

<script type="text/javascript">
var existing = window.onunload;
window.onunload = function() {
	if( existing ) {
		existing();
	}
	/*
	var vtop = document.getElementById( "viewtop" );
	if( vtop != null && ( typeof getXY == 'function' ) ) {
		var xy = getXY( vtop );
		window.scrollTo( 0, xy[1] );
	}
	else
	*/
	if( parent && parent != window ) {
		try
		{
			if( typeof parent.scroll_to_iframe != 'undefined' ) {
				parent.scroll_to_iframe( "listings" );
			}
			else if( typeof parent.window_scroll != 'undefined' ) {
				parent.window_scroll(0,0);
			}
		}
		catch( e )
		{
		}
	}
};

function adjustIFrameExternal( val )
{
	try
	{
		parent.frames["__mrp_comm"].adjustHeightInParent( "mrph-" + val );
	}
	catch( e )
	{
	}
}

function adjustIFrame()
{

	function __getCookie( c_name )
	{
		if (document.cookie.length>0)
		{
			var c_start=document.cookie.lastIndexOf(c_name + "=");
			if (c_start != -1)
			{
				c_start=c_start + c_name.length + 1;
				var c_end=document.cookie.indexOf( ";" , c_start );
				if( c_end == -1 )
					c_end=document.cookie.length;
	    		return unescape(document.cookie.substring(c_start,c_end));
	  		}
	 	}
		return "";
	}


	setTimeout( adjustIFrameHeight, 50 );

	/*
	setTimeout( function() {
		window.scrollTo(0,0);
	}, 100 );
	*/


	if( window.isMrpSearchForm ) {
		if( !__getCookie( "mrp-session-idx" ) ) {
			// potentially 3rd party cookie blocking


			// below doesn't work any more
			return;

			setTimeout( function() {
				try
				{
					parent.frames["__mrp_comm"].showCookiesDialog();
				}
				catch( e ) {
					if( console && console.log) {
						console.log( e.message );
					}
				}

			}, 1500 );
		}
	}
}

function adjustIFrameHeight()
{
	if( parent && parent != window ) {
		var h = getIFrameHeight();
		try
		{
			if( typeof parent.listings_iframe_resize != 'undefined' ) {
				parent.listings_iframe_resize( h );
			}
		}
		catch( e )
		{
		}
		adjustIFrameExternal( h );
	}
}

function onNavigate()
{

}

function getIFrameHeight()
{
	var height = 0;
	if( browser.isSafari ) {
		var elem = document.getElementById( "MainPane" );
		if( !elem ) {
			height = document.body.offsetHeight + 40;
		}
		else {
			height = elem.offsetHeight + 120;
			var vowFolder = document.getElementById( "VowTabFolder" );
			if( vowFolder ) {
				height += vowFolder.offsetHeight;
			}
			var vowFolderNG = document.getElementById( "VowToolbarNG" );
			if( vowFolderNG ) {
				height += vowFolderNG.offsetHeight;
			}
			var predefToolbar = document.getElementById( "PredefinedToolbar" );
			if( predefToolbar ) {
				height += predefToolbar.offsetHeight;
			}
		}
	}
	else if( document.all ) {
		height = document.body.scrollHeight + 60;
	}
	else {
		height = document.body.offsetHeight + 90;
	}

	var toolbar = document.getElementById( "VowToolbarNG" );
	if( toolbar ) {
		var uls = toolbar.getElementsByTagName( "ul" );
		var h = 0;
		for( var i=0; i<uls.length; ++i ) {
			var xy = getXY( uls[i] );
			h = Math.max( h, xy[1] + uls[i].offsetHeight + 30 );
		}
		if( h > height ) {
			height = h;
		}
	}
	return height;
}

function gotoParentUrl( url )
{
	try
	{
		if( parent && parent != window ) {
			parent.location.replace( url );
		}
		else if( opener ) {
			opener.location.replace( url );
		}
	}
	catch( e )
	{
	}
}

// we can't rely on "onloads" as they may be called on "contentLoaded" and
// trully need window's onload even here, to make sure all the variable height
// images are loaded
if (typeof window.addEventListener != 'undefined') {
	window.addEventListener('load', adjustIFrame, false);
} else if (typeof window.attachEvent != 'undefined') {
	window.attachEvent('onload', adjustIFrame);
}

//onloads.push( adjustIFrame );

</script>

<script type="text/javascript" src="//res.myrealpage.com/wps/js/map.js?v=3.0"></script>
<script type="text/javascript" src="//res.myrealpage.com/wps/js/liveControls.js"></script>

<link rel="stylesheet" type="text/css" href="//res.myrealpage.com/wps/css/core.css?a">
<link rel="stylesheet" type="text/css" href="//res.myrealpage.com/wps/css/ng/forms/base-form-controls.css">
<link rel="stylesheet" type="text/css" href="//res.myrealpage.com/wps/css/ng/aggregated.css?x43"><link rel="stylesheet" type="text/css" href="//res.myrealpage.com/wps/css/map.css">
<link rel="stylesheet" type="text/css" href="//res.myrealpage.com/wps/css/liveControls.css">
<link rel="stylesheet" type="text/css" href="//res.myrealpage.com/wps/css/searchForm.css?x7">

<style>
body div.listing-content,
body div.listing-content td,
body div.listing-content a,
body div.listing-content div,
body div.listing-content p
{
 	font-family: arial, helvetica, sans-serif;
 	font-size: 12px;
}
</style>

<script>
var isMrpSearchForm = true;
</script>


<link rel="stylesheet" type="text/css" href="//res.myrealpage.com/wps/css/ng/themes/default/theme.css">

<link rel="stylesheet" type="text/css" href="//res.myrealpage.com/wps/rest/11951/res/page-format.css?_wf=800">

<script>
var gmapsearch_map_width = 798;
var gmapsearch_map_height = 520;

</script>



<!-- CUSTOM LISTING CSS RULES -->
<style>
.listing_contact_info {
display: none;
}
</style>
<!-- END CUSTOM LISTING CSS RULES -->




</head>
<body marginheight="0"><a id="viewtop" name="viewtop" style="position: absolute; position: expression('relative'); top: 0px; left: 0;"></a>

<script>

function doClearSession()
{
	document.SearchForm.clearSession.value = "true";
	document.SearchForm.submit();
}

onloads.push( function() {
	subscribeToBus( "save.search", null, function() {
		document.SearchForm.saveSearch.value = "true";
		document.SearchForm.submit();
		return false;
	}, null );

	setTimeout( function() {
		if( window.location.search &&
	            window.location.search.indexOf( "showmobile" ) != -1 ) {
	            openIPhoneInquiry( "/wps/rest/11951/l/mobile-inquiry", 580 );
	    }
	}, 500 );
} );

function initForm()
{
}

</script>



<div class="page-frame listing-content search-content" id="MainPane" style="margin: auto;">





<script type="text/javascript" src="//res.myrealpage.com/wps/rest/11951/res/vow-toolbar.js?handlerURL=%2Fwps%2Frest%2F11951%2Fl%2Fvow%2Ftoolbar&amp;baseURL=%2Fwps%2F-%2F_theme~default%2Cnoframe~true%2Frecip%2F11951%2F"></script>
<script>
function vtbMouseEnter( e )
{

	if( e ) {
		e.className += ' sfhover';
	}
}

function vtbMouseLeave( e )
{
	if( e ) {
		e.className=e.className.replace(' sfhover', '');
	}
}
</script>


<div id="VowToolbarNG" class="ToolbarNG">
<a name="VowToolbarNGFormsAnchor"></a>


<div class="info"><strong>Not logged in</strong></div>

<ul class="toolbar">
	<li onmouseenter="vtbMouseEnter(this)" onmouseleave="vtbMouseLeave(this)"><a href="/wps/rest/11951/l/vow/toolbar" onclick="return publishToBus( 'vow.login',
			{ accountId : 11951 } );"><span>Login</span></a></li>
	<li onmouseenter="vtbMouseEnter(this)" onmouseleave="vtbMouseLeave(this)"><a href="/wps/rest/11951/l/vow/toolbar" onclick="return publishToBus( 'vow.signup',
			{ accountId : 11951 } );"><span>Signup</span></a></li>

	<input type="hidden" id="vowToolbarCanSaveSearch" value="true">
	<input type="hidden" id="vowToolbarCanSaveSearchReferrer" value="">

	<li><a href="javascript:;" onclick="publishToBus('save.search', { 'referrer' : '' }, false ); return false"><img class="recip-email-alerts-icon" src="//res.myrealpage.com/wps/img/email-alerts2.gif" border="0"><span>Save Search</span></a></li>
</ul>

<div id="vow-login-with-external-id">
Login with:
<span onmouseenter="vtbMouseEnter(this)" onmouseleave="vtbMouseLeave(this)"><a href="javascript:;" onclick="return openLoginWindow('Facebook');"><span><img src="//res.myrealpage.com/wps/img/classifieds/facebook.png" border="0" width="16" height="16" title="Sign in with Facebook"></span></a></span>
</div>


</div>
<table cellspacing="0" cellpadding="0" width="100%" style="margin-top: 10px">
<tbody><tr>
	<td align="center" valign="top" id="VowToolbarNGForms">
	</td>
</tr>
</tbody></table>


<a name="ComponentDivAnchor"></a>
<table cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><td align="center" valign="top" id="ComponentDiv"></td><td></td></tr>
</tbody></table>

<form id="SearchFormElement" name="SearchForm" action="/wps/-/_theme~default,noframe~true/recip/11951/Search.form" method="POST" style="margin: 0; padding: 0">

<input type="hidden" name="noredir" value="false">



<div class="listing-tabs" style="border-left: 0;">
	<script type="text/javascript">
	function switchTab(url)
	{
		var loc = window.location.href.replace( /#.+$/, '' );
		window.location = url + "";
		return false;
	}
	</script>


	<ul>

		<li id="choose-a-form-label">Search by:</li>
		<li class="current first-tab"><a href="/wps/-/_theme~default,noframe~true/recip/11951/Search.form?_sf_=graphicmap,GV,AUTO" onclick="return switchTab( this.href )">Area Search</a></li>
		<li><a href="/wps/-/_theme~default,noframe~true/recip/11951/Search.form?_sf_=gmapsearch,GV,AUTO" onclick="return switchTab( this.href )">Google Map</a></li>
		<li><a href="/wps/-/_theme~default,noframe~true/recip/11951/Search.form?_sf_=gv_text_search,GV,AUTO" onclick="return switchTab( this.href )">Simple</a></li>
		<li><a href="/wps/-/_theme~default,noframe~true/recip/11951/Search.form?_sf_=mlsnumsearch,GV,AUTO" onclick="return switchTab( this.href )">MLS® #</a></li>
		<li><a href="/wps/-/_theme~default,noframe~true/recip/11951/Search.form?_sf_=addresssearch,GV,AUTO" onclick="return switchTab( this.href )">Address</a></li>
	</ul>
</div>

<div style="clear: both;"></div>

<div style="clear: both">

<script>
var _hint_ = "_search_ready_";

var selectedAreas = {"F_LA_F6A":"Langley City","F_SU_F39":"Sullivan Station","F_SU_F37":"East Newton","F_AB_F78":"Central Abbotsford","F_SU_F38":"Panorama Ridge","F_AB_F77":"Sumas Prairie","F_AB_F76":"Aberdeen","F_SU_F36":"West Newton","F_SU_F34":"Fleetwood Tynehead","F_SU_F31":"Queen Mary Park Surrey","F_SU_F32":"Bear Creek Green Timbers","F_AB_F71":"Bradner","F_LA_F63":"Willoughby Heights","F_MI_F84":"Durieu","F_AB_F70":"Poplar","F_LA_F64":"Salmon River","F_MI_F85":"Dewdney Deroche","F_LA_F61":"Walnut Grove","F_MI_F86":"Lake Errock","F_LA_F62":"County Line Glen Valley","F_MI_F87":"Hemlock","F_AB_F75":"Abbotsford East","F_LA_F67":"Campbell Valley","F_MI_F88":"Mission-West","F_AB_F74":"Abbotsford West","F_LA_F68":"Otter District","F_AB_F73":"Sumas Mountain","F_LA_F65":"Brookswood Langley","F_AB_F72":"Matsqui","F_LA_F66":"Aldergrove Langley","F_LA_F69":"Fort Langley","F_MI_F80":"Hatzic","F_MI_F81":"Stave Falls","F_MI_F82":"Steelhead","F_MI_F83":"Mission BC","F_WR_F51":"Elgin Chantrell","F_CL_F41":"Cloverdale BC","F_CL_F42":"Serpentine","F_WR_F59":"Pacific Douglas","F_WR_F58":"Morgan Creek","F_CL_F43":"Clayton","F_WR_F57":"Grandview Surrey","F_WR_F56":"Hazelmere","F_WR_F55":"King George Corridor","F_LA_F60":"Murrayville","F_WR_F54":"White Rock","F_WR_F53":"Crescent Bch Ocean Pk.","F_WR_F52":"Sunnyside Park Surrey","F_ND_F11":"Annieville","F_NS_F27":"Guildford","F_ND_F12":"Nordel","F_NS_F28":"Port Kells","F_NS_F25":"Cedar Hills","F_NS_F26":"Whalley","F_NS_F23":"Fraser Heights","F_NS_F24":"Royal Heights","F_ND_F13":"Scottsdale","F_NS_F21":"Bridgeview","F_ND_F14":"Sunshine Hills Woods","F_NS_F22":"Bolivar Heights"};
var currentLeafs = {"P":false,"SC":false,"VBDBD":true,"S":false,"V":false,"F":false,"W":false,"H":false,"I":false};

var controlRefs = {"DWELLING_TYPE":2,"HOUSE_STYLES":2,"CONDO_STYLES":1,"RESTRICTED_AGE":2,"BEDROOMS":2,"BATHROOMS":2,"YEAR_BUILT":2,"SQ_FOOTAGE":2,"SUITE":1,"LAND_SIZE":2,"KITCHENS":2,"AMENITIES":2,"BASEMENT":2,"PARKING":2,"VIEW":2};
var controlDeps = {"PROPERTY_TYPE:RED":["DWELLING_TYPE","HOUSE_STYLES","RESTRICTED_AGE","BEDROOMS","BATHROOMS","YEAR_BUILT","SQ_FOOTAGE","SUITE","LAND_SIZE","KITCHENS","AMENITIES","BASEMENT","PARKING","VIEW"],"PROPERTY_TYPE:REA":["DWELLING_TYPE","HOUSE_STYLES","CONDO_STYLES","RESTRICTED_AGE","BEDROOMS","BATHROOMS","YEAR_BUILT","SQ_FOOTAGE","LAND_SIZE","KITCHENS","AMENITIES","BASEMENT","PARKING","VIEW"],"PROPERTY_TYPE:MLT":["DWELLING_TYPE","RESTRICTED_AGE","BEDROOMS","BATHROOMS","YEAR_BUILT","SQ_FOOTAGE","LAND_SIZE","KITCHENS","AMENITIES","BASEMENT","PARKING","VIEW"],"PROPERTY_TYPE:LND":["LAND_SIZE"]};

function initSearchForm()
{
	var areas = document.getElementsByTagName( "area" );
	for( var i=0; i<areas.length; ++i ) {
		var a = areas[i];
		a.onclick = function() {
			var path = this.id;
			if (typeof path == 'undefined' || !path)
				path = this.getAttribute('rel');
			publishToBus( "area.click", { "area" : path } );
		};
		a.onmouseover = function() { document.body.style.cursor = "pointer"; };
		a.onmouseout = function() {  document.body.style.cursor = "default"; };
	}
	for( var depKey in controlDeps ) {
		adjustControlsByDependencies( depKey );
	}

	showOptionalPane( document.getElementById( "optionalPaneLink" ), "more-options",
		false );

	processMapSelections();
}

function processMapSelections()
{
	var sels = document.SearchForm.selections;
	sels.value = "";
	for( var a in selectedAreas ) {
		if( sels.value.length > 0 ) {
			sels.value += ",";
		}
		sels.value += a;
	}
}

function submitSearchForm()
{
	processMapSelections();
	//document.SearchForm.method = "GET";
	document.SearchForm.submit();
}

/*
document.SearchForm.onsubmit = function() {
	submitSearchForm();
	return false;
};
*/

function backupOne()
{
	document.SearchForm.mapId.value = "";
	document.SearchForm.updateForm.value = "true";
	submitSearchForm();
}

function drillArea( area )
{
	document.SearchForm.mapId.value = area;
	document.SearchForm.updateForm.value = "true";
	submitSearchForm();
}

function deselectArea( area )
{
	var overlay = document.getElementById( area + "-overlay" );
	if( overlay ) {
		overlay.style.display = "none";
	}
	var checkbox = document.getElementById( area + "-checkbox" );
	if( checkbox ) {
		checkbox.checked = '';
	}
	var label = document.getElementById( area + "-checkbox-label" );
	if( label ) {
		label.className = '';
	}
	delete selectedAreas[area];

	processMapSelections();
}

function selectArea( area )
{
	var overlay = document.getElementById( area + "-overlay" );
	if( overlay ) {
		overlay.style.display = "";
	}
	var checkbox = document.getElementById( area + "-checkbox" );
	if( checkbox ) {
		checkbox.checked = 'checked';
	}
	var label = document.getElementById( area + "-checkbox-label" );
	if( label ) {
		label.className = 'selected';
	}
	selectedAreas[area] = area;

	processMapSelections();
}

function bulkArea( area, select )
{
	if( currentLeafs[area] ) {
		areaClicked( area );
	}
	else {
		if( "" == area ) {
			area = "root";
			if( !select ) {
				document.SearchForm.selections.value = "";
				selectedAreas = {};
			}
		}
		if( select ) {
			document.SearchForm.bulkSelect.value = area;
		}
		else {
			document.SearchForm.bulkDeselect.value = area;
		}
		document.SearchForm.updateForm.value = "true";
		submitSearchForm();
	}
}

function areaClicked( area )
{
	if( currentLeafs[area] ) {
		if( selectedAreas[area] ) {
			deselectArea( area );
		}
		else {
			selectArea( area );
		}
	}
	else {
		drillArea( area );
	}
}

function adjustControlsByDependencies( ctrlName_ctrlValue, on )
{
	var dependents = controlDeps[ctrlName_ctrlValue];
	if( !dependents )
		return;
	for( var i=0; i<dependents.length; ++i ) {
		if( typeof on != 'undefined' ) {
			if( on ) {
				controlRefs[dependents[i]] += 1;
			}
			else {
				controlRefs[dependents[i]] -= 1;
			}
			controlRefs[dependents[i]] = Math.max( controlRefs[dependents[i]], 0 );
		}

		var refs = controlRefs[dependents[i]];
		var disabled = ( refs == 0 );

		var ctrl = document.getElementById( dependents[i] );
		if( !ctrl )
			continue;

		if( disabled ) {
			deselectAllMultiList( dependents[i] );
			updateMultiListSummary( dependents[i], dependents[i]+'-selectLabel' )
		}

		if( ctrl.nodeName.toLowerCase() == 'select' ) {
			ctrl.disabled = ( disabled ? 'disabled' : '' );
			if( disabled ) {
				ctrl.selectedIndex = 0;
			}
		}
		else {
			var checkboxes = ctrl.getElementsByTagName( "input" );
			for( var j=0; j<checkboxes.length; ++j ) {
				checkboxes[j].disabled = ( disabled ? 'disabled' : '' );
			}
		}
	}
}

if (!Array.prototype.indexOf)
{
  Array.prototype.indexOf = function(elt /*, from*/)
  {
    var len = this.length;

    var from = Number(arguments[1]) || 0;
    from = (from < 0)
         ? Math.ceil(from)
         : Math.floor(from);
    if (from < 0)
      from += len;

    for (; from < len; from++)
    {
      if (from in this &&
          this[from] === elt)
        return from;
    }
    return -1;
  };
}
var getElementsByClassName = function (className, tag, elm){
	elm = elm || document;
	if (elm.getElementsByClassName) {
		getElementsByClassName = function (className, tag, elm) {
			var elements = elm.getElementsByClassName(className),
				nodeName = (tag)? new RegExp("\\b" + tag + "\\b", "i") : null,
				returnElements = [],
				current;
			for(var i=0, il=elements.length; i<il; i+=1){
				current = elements[i];
				if(!nodeName || nodeName.test(current.nodeName)) {
					returnElements.push(current);
				}
			}
			return returnElements;
		};
	}
	else if (document.evaluate) {
		getElementsByClassName = function (className, tag, elm) {
			tag = tag || "*";
			var classes = className.split(" "),
				classesToCheck = "",
				xhtmlNamespace = "http://www.w3.org/1999/xhtml",
				namespaceResolver = (document.documentElement.namespaceURI === xhtmlNamespace)? xhtmlNamespace : null,
				returnElements = [],
				elements,
				node;
			for(var j=0, jl=classes.length; j<jl; j+=1){
				classesToCheck += "[contains(concat(' ', @class, ' '), ' " + classes[j] + " ')]";
			}
			try	{
				elements = document.evaluate(".//" + tag + classesToCheck, elm, namespaceResolver, 0, null);
			}
			catch (e) {
				elements = document.evaluate(".//" + tag + classesToCheck, elm, null, 0, null);
			}
			while ((node = elements.iterateNext())) {
				returnElements.push(node);
			}
			return returnElements;
		};
	}
	else {
		getElementsByClassName = function (className, tag, elm) {
			tag = tag || "*";
			var classes = className.split(" "),
				classesToCheck = [],
				elements = (tag === "*" && elm.all)? elm.all : elm.getElementsByTagName(tag),
				current,
				returnElements = [],
				match;
			for(var k=0, kl=classes.length; k<kl; k+=1){
				classesToCheck.push(new RegExp("(^|\\s)" + classes[k] + "(\\s|$)"));
			}
			for(var l=0, ll=elements.length; l<ll; l+=1){
				current = elements[l];
				match = false;
				for(var m=0, ml=classesToCheck.length; m<ml; m+=1){
					match = classesToCheck[m].test(current.className);
					if (!match) {
						break;
					}
				}
				if (match) {
					returnElements.push(current);
				}
			}
			return returnElements;
		};
	}
	return getElementsByClassName(className, tag, elm);
};


function deselectAllMultiList( multiListDivId )
{
	var div = document.getElementById( multiListDivId );
	if( !div ) {
		return;
	}
	var children = div.getElementsByTagName( "input" );
	for( var i=0; i<children.length; ++i ) {
		if( children[i].type=='checkbox' ) {
			children[i].checked = '';
			if (typeof publishToBus == 'function') {
				publishToBus( 'checkbox_value_change', {
					'name' : children[i].name,
					'value' : children[i].value,
					'on' : false
				} );
			}
		}
	}
}

function selectAllMultiList( multiListDivId )
{
	var div = document.getElementById( multiListDivId );
	if( !div ) {
		return;
	}
	var children = div.getElementsByTagName( "input" );
	for( var i=0; i<children.length; ++i ) {
		if( children[i].type=='checkbox' && !children[i].disabled ) {
			children[i].checked = 'checked';
			if (typeof publishToBus == 'function') {
				publishToBus( 'checkbox_value_change', {
					'name' : children[i].name,
					'value' : children[i].value,
					'on' : true
				} );
			}
		}
	}
}

function getMultiListTotalCount(item)
{
	if (item && item.parentNode.className=='item') {
		var li = item.parentNode.parentNode.parentNode;
		if (li.className && (li.className.indexOf('expander')!=-1 || li.className.indexOf('collapser')!=-1)) {
			var elems = getElementsByClassName( "item", "input", li );
			if (elems.length>0) {
				var cnt = 0;
				for( var i=0; i<elems.length; i++ ) {
					if (elems[i].type=='checkbox')
						cnt++;
				}
				return cnt;
			}
		}
	}
	return 0;
}
function getMultiListCountSelected(item)
{
	if (item && item.parentNode.className=='item') {
		var li = item.parentNode.parentNode.parentNode;
		if (li.className && (li.className.indexOf('expander')!=-1 || li.className.indexOf('collapser')!=-1)) {
			var elems = getElementsByClassName( "item", "input", li );
			if (elems.length>0) {
				var cnt = 0;
				for( var i=0; i<elems.length; i++ ) {
					if (elems[i].type=='checkbox' && elems[i].checked)
						cnt++;
				}
				item.checked = (cnt > 0);
				return cnt;
			}
		}
	}
	return 0;
}

function updateMultiListSummary( multiListDivId, numberLabelId )
{
	var div = document.getElementById( multiListDivId );
	var elm = document.getElementById( numberLabelId );
	if( !div || !elm ) {
		return;
	}
	var tree = getElementsByClassName('tree-container', 'ul', div).length>0;
	var children = div.getElementsByTagName( "input" );
	var totalSelected = 0;
	if (children) {
		if (tree) {
			for( var i=0; i<children.length; i++ ) {
				var totalCount = getMultiListTotalCount(children[i]);
				if (totalCount>0) {
					var countSelected = getMultiListCountSelected(children[i]);
					var itemCount = getElementsByClassName('item-attention', 'span', children[i].parentNode);
					if (itemCount.length>0) {
						if (countSelected>0)
							itemCount[0].innerHTML = '('+countSelected+'/'+totalCount+')';
						else
							itemCount[0].innerHTML = '';
					}
				}
				if( children[i].type=='checkbox' && children[i].checked && children[i].className=='item' ) {
					totalSelected++;
				}
			}
		} else {
			for( var i=0; i<children.length; i++ ) {
				if( children[i].type=='checkbox' && children[i].checked ) {
					totalSelected++;
				}
			}
		}
	}
	if( totalSelected > 0 ) {
		elm.className = "attention";
	}
	else {
		elm.className = "";
	}
	elm.innerHTML = "" + totalSelected;
}
function deselectParentMultiList( item )
{
	if (item && item.parentNode.className=='item') {
		var parent = item.parentNode.parentNode.parentNode.parentNode.parentNode;
		if (parent.tagName=='LI') {
			var children = parent.getElementsByTagName( "input" );
			getMultiListCountSelected(children[0]);
			deselectParentMultiList(children[0]);
		}
	}
}
function toggleAllMultiList( item, multiListDivId, numberLabelId )
{
	var div = document.getElementById( multiListDivId );
	if( !div ) {
		return;
	}
	if (item && item.parentNode.className=='item') {
		var children = item.parentNode.parentNode.parentNode.getElementsByTagName( "input" );
		var checked = item.checked;
		for( var i=0; i<children.length; i++ ) {
			children[i].checked = checked;
		}
		deselectParentMultiList(item);
	}
	updateMultiListSummary(multiListDivId, numberLabelId);
}
function toggleMultiList( item, multiListDivId, numberLabelId, skipSummaryUpdate )
{
	if (item) {
		var idx = item.className.indexOf("expander");
		var holders = getElementsByClassName("item-holder", "span", item);
		var uls = item.getElementsByTagName("ul");
		if (idx!=-1) {
			item.className = item.className.substring(0, idx)+"collapser";
			idx = holders[0].className.indexOf("expander");
			holders[0].className = holders[0].className.substring(0, idx)+"collapser";
			uls[0].className = "collapser";
		} else {
			idx = item.className.indexOf("collapser");
			if (idx!=-1) {
				item.className = item.className.substring(0, idx)+"expander";
				idx = holders[0].className.indexOf("collapser");
				holders[0].className = holders[0].className.substring(0, idx)+"expander";
				uls[0].className = "expander";
			}
		}
		if (!skipSummaryUpdate)
			updateMultiListSummary( multiListDivId, numberLabelId );
	}
}
function openAllMultiList( multiListDivId, numberLabelId )
{
	var div = document.getElementById( multiListDivId );
	if( !div ) {
		return;
	}
	var children = div.getElementsByTagName( "li" );
	for( var i=0; i<children.length; ++i ) {
		if (children[i].className.indexOf('expander')!=-1) {
			toggleMultiList(children[i], multiListDivId, numberLabelId, true);
		}
	}
	updateMultiListSummary(multiListDivId, numberLabelId);
}
function closeAllMultiList( multiListDivId, numberLabelId )
{
	var div = document.getElementById( multiListDivId );
	if( !div ) {
		return;
	}
	var children = div.getElementsByTagName( "li" );
	for( var i=0; i<children.length; ++i ) {
		if (children[i].className.indexOf('collapser')!=-1) {
			toggleMultiList(children[i], multiListDivId, numberLabelId, true);
		}
	}
	updateMultiListSummary(multiListDivId, numberLabelId);
}

function showOptionalPane( toggleElem, paneId, visible )
{
	var pane = document.getElementById( paneId );
	if( !pane ) {
		return;
	}
	if( visible ) {
		toggleElem.innerHTML = "- Hide More Options";
		pane.style.display = '';
		if( typeof adjustIFrameHeight != 'undefined' ) {
			setTimeout( adjustIFrameHeight, 100 );
		}
	}
	else {
		toggleElem.innerHTML = "+ Show More Options";
		pane.style.display = 'none';
		if( typeof adjustIFrameHeight != 'undefined' ) {
			setTimeout( adjustIFrameHeight, 100 );
		}
	}

}

function toggleOptionalPane( toggleElem, paneId, hiddenFieldId )
{
	var pane = document.getElementById( paneId );
	if( !pane ) {
		return;
	}
	var h = document.getElementById( hiddenFieldId );
	if( pane.style.display == 'none' ) {
		showOptionalPane( toggleElem, paneId, true );
		if( h ) {
			h.value = 'true';
		}
	}
	else {
		showOptionalPane( toggleElem, paneId, false );
		if( h ) {
			h.value = 'false';
		}
	}
}

function onAjaxBlur( inputElem, id )
{
	var elem = $(id);
	if (inputElem && elem) {
		var text = inputElem.value;
		if (elem.value=='' && text!='') {
			var elems = $(id+'_results').getElementsBySelector('li:first-child');
			var found = false;
			if (elems && elems.length>0) {
				var ee = $(elems[0]).getElementsBySelector('span[class="informal"]');
				if (ee && ee.length>0) {
					var label = elems[0].firstChild.innerHTML;
					ee.each(function(e) {
						if (label)
							inputElem.value = label;
						elem.value = e.innerHTML;
						found = true;
					});
				}
			}
			if (!found) {
				elem.value = inputElem.value;
			}
		}
	}
}

subscribeToBus( "area.click", null, function( s, m, d ) {
	areaClicked( m.area );
}, null );
subscribeToBus( "area.bulk", null, function( s, m, d ) {
	bulkArea( m.area, m.select );
}, null );
subscribeToBus( "checkbox_value_change", null, function( s, m, d ) {
	adjustControlsByDependencies( m.name + ":" + m.value, m.on );
}, null );


onloads.push( initSearchForm );

</script>


<input type="hidden" name="mapId" value="">
<input type="hidden" name="selections" value="F_LA_F6A,F_SU_F39,F_SU_F37,F_AB_F78,F_SU_F38,F_AB_F77,F_AB_F76,F_SU_F36,F_SU_F34,F_SU_F31,F_SU_F32,F_AB_F71,F_LA_F63,F_MI_F84,F_AB_F70,F_LA_F64,F_MI_F85,F_LA_F61,F_MI_F86,F_LA_F62,F_MI_F87,F_AB_F75,F_LA_F67,F_MI_F88,F_AB_F74,F_LA_F68,F_AB_F73,F_LA_F65,F_AB_F72,F_LA_F66,F_LA_F69,F_MI_F80,F_MI_F81,F_MI_F82,F_MI_F83,F_WR_F51,F_CL_F41,F_CL_F42,F_WR_F59,F_WR_F58,F_CL_F43,F_WR_F57,F_WR_F56,F_WR_F55,F_LA_F60,F_WR_F54,F_WR_F53,F_WR_F52,F_ND_F11,F_NS_F27,F_ND_F12,F_NS_F28,F_NS_F25,F_NS_F26,F_NS_F23,F_NS_F24,F_ND_F13,F_NS_F21,F_ND_F14,F_NS_F22">
<input type="hidden" name="updateForm" value="">
<input type="hidden" name="bulkSelect" value="">
<input type="hidden" name="bulkDeselect" value="">
<input type="hidden" name="submittingForm" value="true">

<div class="graphic-map-form-outer">
<div class="graphic-map-form graphic-map-search-form">



<table cellpadding="0" cellspacing="0" width="100%" style="position: relative">
	<tbody><tr>
		<td colspan="2" align="left" valign="middle">
		<div class="graphic-map-breadcrumbs" style="padding-top: 10px">
		Southwestern BC
		</div>
		</td>
	</tr>
	<tr>
		<td valign="top" align="left">
		<div class="graphic-map-areas-controls">
		<a href="javascript:;" onclick="publishToBus( 'area.bulk',
			{'area': '', 'select' : false } ); return false;">Clear All</a>
		|
		<a href="javascript:;" onclick="publishToBus( 'area.bulk',
			{'area': '', 'select' : true } ); return false;">Select All</a>
		</div>
		<div class="graphic-map-areas-select " style="
			border: 1px solid #ababab;
			width: 238px;
			width: expression(&quot;250px&quot;);
			overflow-x: auto;
			overflow-y: scroll;
			height: 344px;
			height: expression(&quot;356px&quot;);
			">
			<label id="V-checkbox-label"><input type="checkbox" id="V-checkbox" title="Click to select the entire area" onclick="publishToBus( 'area.bulk', { 'area' : 'V', 'select' : this.checked } );"><a title="Click to explore other areas within this area" href="javascript:;" onclick="publishToBus( 'area.click', { 'area' : 'V' } ); return false;">Greater Vancouver</a>				</label>
			<label id="F-checkbox-label" class="selected"><input type="checkbox" id="F-checkbox" title="Click to select the entire area" onclick="publishToBus( 'area.bulk', { 'area' : 'F', 'select' : this.checked } );" checked="checked"><a title="Click to explore other areas within this area" href="javascript:;" onclick="publishToBus( 'area.click', { 'area' : 'F' } ); return false;">Fraser Valley (60)</a>				</label>
			<label id="H-checkbox-label"><input type="checkbox" id="H-checkbox" title="Click to select the entire area" onclick="publishToBus( 'area.bulk', { 'area' : 'H', 'select' : this.checked } );"><a title="Click to explore other areas within this area" href="javascript:;" onclick="publishToBus( 'area.click', { 'area' : 'H' } ); return false;">Chilliwack</a>				</label>
			<label id="P-checkbox-label"><input type="checkbox" id="P-checkbox" title="Click to select the entire area" onclick="publishToBus( 'area.bulk', { 'area' : 'P', 'select' : this.checked } );"><a title="Click to explore other areas within this area" href="javascript:;" onclick="publishToBus( 'area.click', { 'area' : 'P' } ); return false;">Pemberton</a>				</label>
			<label id="S-checkbox-label"><input type="checkbox" id="S-checkbox" title="Click to select the entire area" onclick="publishToBus( 'area.bulk', { 'area' : 'S', 'select' : this.checked } );"><a title="Click to explore other areas within this area" href="javascript:;" onclick="publishToBus( 'area.click', { 'area' : 'S' } ); return false;">Squamish</a>				</label>
			<label id="W-checkbox-label"><input type="checkbox" id="W-checkbox" title="Click to select the entire area" onclick="publishToBus( 'area.bulk', { 'area' : 'W', 'select' : this.checked } );"><a title="Click to explore other areas within this area" href="javascript:;" onclick="publishToBus( 'area.click', { 'area' : 'W' } ); return false;">Whistler</a>				</label>
			<label id="SC-checkbox-label"><input type="checkbox" id="SC-checkbox" title="Click to select the entire area" onclick="publishToBus( 'area.bulk', { 'area' : 'SC', 'select' : this.checked } );"><a title="Click to explore other areas within this area" href="javascript:;" onclick="publishToBus( 'area.click', { 'area' : 'SC' } ); return false;">Sunshine Coast</a>				</label>
			<label id="I-checkbox-label"><input type="checkbox" id="I-checkbox" title="Click to select the entire area" onclick="publishToBus( 'area.bulk', { 'area' : 'I', 'select' : this.checked } );"><a title="Click to explore other areas within this area" href="javascript:;" onclick="publishToBus( 'area.click', { 'area' : 'I' } ); return false;">Islands-Van. &amp; Gulf</a>				</label>
			<label id="VBDBD-checkbox-label"><input type="checkbox" id="VBDBD-checkbox" title="Click to select the entire area" onclick="publishToBus( 'area.bulk', { 'area' : 'VBDBD', 'select' : this.checked } );">Bowen Island
				</label>
		</div>
		</td>

		<td valign="top" align="left" height="389" width="280">
		<div style="position: relative;" class="graphic-map-container" id="MapContainer">
		<img src="//res.myrealpage.com/wps/maps/regions/GV/map.png" border="0" usemap="#Map" style="position: absolute; top: 0; left: 0">
			<img src="//res.myrealpage.com/wps/maps/regions/GV/V.png" border="0" id="V-overlay" usemap="#Map" style="position: absolute; top: 0; left: 0;
				display: none">
			<img src="//res.myrealpage.com/wps/maps/regions/GV/F.png" border="0" id="F-overlay" usemap="#Map" style="position: absolute; top: 0; left: 0;
				">
			<img src="//res.myrealpage.com/wps/maps/regions/GV/H.png" border="0" id="H-overlay" usemap="#Map" style="position: absolute; top: 0; left: 0;
				display: none">
			<img src="//res.myrealpage.com/wps/maps/regions/GV/P.png" border="0" id="P-overlay" usemap="#Map" style="position: absolute; top: 0; left: 0;
				display: none">
			<img src="//res.myrealpage.com/wps/maps/regions/GV/S.png" border="0" id="S-overlay" usemap="#Map" style="position: absolute; top: 0; left: 0;
				display: none">
			<img src="//res.myrealpage.com/wps/maps/regions/GV/W.png" border="0" id="W-overlay" usemap="#Map" style="position: absolute; top: 0; left: 0;
				display: none">
			<img src="//res.myrealpage.com/wps/maps/regions/GV/SC.png" border="0" id="SC-overlay" usemap="#Map" style="position: absolute; top: 0; left: 0;
				display: none">
			<img src="//res.myrealpage.com/wps/maps/regions/GV/I.png" border="0" id="I-overlay" usemap="#Map" style="position: absolute; top: 0; left: 0;
				display: none">
			<img src="//res.myrealpage.com/wps/maps/regions/GV/VBDBD.png" border="0" id="VBDBD-overlay" usemap="#Map" style="position: absolute; top: 0; left: 0;
				display: none">
		</div>
		</td>
	</tr>
</tbody></table>
<table cellpadding="5" cellspacing="0" width="100%" style="position: relative; margin-top: 10px; height: 170px">
<tbody><tr>
	<td valign="top" align="left" width="33%">
		<div class="field-label">
		Price From:
		</div>
		<input type="text" name="PRICE_FROM" class="" value="$200,000" style="width: 95%">
	</td>
	<td valign="top" align="left" width="33%">
		<div class="field-label">
		Price To:
		</div>
		<input type="text" name="PRICE_TO" class="" value="$500,000" style="width: 95%">
	</td>
	<td valign="top" align="left" width="33%" rowspan="4">
		<div class="field-label"><nobr>Property Types:
		<span id="PROPERTY_TYPE-selectLabel" class="attention">2</span></nobr></div>
<div id="PROPERTY_TYPE" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; width: 95%; height: 150px">
<input type="hidden" name="PROPERTY_TYPE" value="">
	<div id="PROPERTY_TYPE_0"><nobr>
	<label>
	<input type="checkbox" name="PROPERTY_TYPE" value="RED" onclick="toggleAllMultiList(this,'PROPERTY_TYPE','PROPERTY_TYPE-selectLabel'); publishToBus('checkbox_value_change',
			{'name': 'PROPERTY_TYPE', 'value':this.value, 'on' : this.checked } )" checked="checked">
	<span style="cursor: pointer;" class="large-control">Houses (Detached)</span>
	</label></nobr></div>
	<div id="PROPERTY_TYPE_1"><nobr>
	<label>
	<input type="checkbox" name="PROPERTY_TYPE" value="REA" onclick="toggleAllMultiList(this,'PROPERTY_TYPE','PROPERTY_TYPE-selectLabel'); publishToBus('checkbox_value_change',
			{'name': 'PROPERTY_TYPE', 'value':this.value, 'on' : this.checked } )" checked="checked">
	<span style="cursor: pointer;" class="large-control">Condos/Townhouses (Attached)</span>
	</label></nobr></div>
	<div id="PROPERTY_TYPE_2"><nobr>
	<label>
	<input type="checkbox" name="PROPERTY_TYPE" value="LND" onclick="toggleAllMultiList(this,'PROPERTY_TYPE','PROPERTY_TYPE-selectLabel'); publishToBus('checkbox_value_change',
			{'name': 'PROPERTY_TYPE', 'value':this.value, 'on' : this.checked } )">
	<span style="cursor: pointer;" class="large-control">Land Only</span>
	</label></nobr></div>
	<div id="PROPERTY_TYPE_3"><nobr>
	<label>
	<input type="checkbox" name="PROPERTY_TYPE" value="MLT" onclick="toggleAllMultiList(this,'PROPERTY_TYPE','PROPERTY_TYPE-selectLabel'); publishToBus('checkbox_value_change',
			{'name': 'PROPERTY_TYPE', 'value':this.value, 'on' : this.checked } )">
	<span style="cursor: pointer;" class="large-control">Multi-Family</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('PROPERTY_TYPE');
	updateMultiListSummary('PROPERTY_TYPE','PROPERTY_TYPE-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('PROPERTY_TYPE','PROPERTY_TYPE-selectLabel');
</script>
	</td>
</tr>

<tr>
	<td valign="top" align="left" width="33%">
		<div class="field-label">Bedrooms:</div>
<select id="BEDROOMS" name="BEDROOMS" class="large-control search-form-select" style="vertical-align: middle; width: 100%" onclick="" onchange="">
<option value="null">Doesn't matter</option>
<option value="1">Min 1 bedroom</option>
<option value="2">Min 2 bedrooms</option>
<option value="3">Min 3 bedrooms</option>
<option value="4">Min 4 bedrooms</option>
<option value="5">Min 5 bedrooms</option>
<option value="6">Min 6 bedrooms</option>
<option value="7">Min 7 bedrooms</option>
</select>

	</td>
	<td valign="top" align="left" width="33%">
		<div class="field-label">Bathrooms:</div>
<select id="BATHROOMS" name="BATHROOMS" class="large-control search-form-select" style="vertical-align: middle; width: 100%" onclick="" onchange="">
<option value="null">Doesn't matter</option>
<option value="1">Min 1 bathroom</option>
<option value="2">Min 2 bathrooms</option>
<option value="3">Min 3 bathrooms</option>
<option value="4">Min 4 bathrooms</option>
</select>

	</td>
</tr>

<tr>
	<td valign="top" align="left" width="33%">
		<div class="field-label">Age:</div>
<select id="YEAR_BUILT" name="YEAR_BUILT" class="large-control search-form-select" style="vertical-align: middle; width: 100%" onclick="" onchange="">
<option value="null">Any</option>
<option value="2019">New building</option>
<option value="2018">Max 1 year</option>
<option value="2017">Max 2 years</option>
<option value="2016">Max 3 years</option>
<option value="2015">Max 4 years</option>
<option value="2014">Max 5 years</option>
<option value="2011">Max 8 years</option>
<option value="2009">Max 10 years</option>
<option value="2004">Max 15 years</option>
<option value="1999">Max 20 years</option>
<option value="1994">Max 25 years</option>
<option value="1989">Max 30 years</option>
<option value="1979">Max 40 years</option>
<option value="1969">Max 50 years</option>
</select>

	</td>
	<td valign="top" align="left" width="33%">
		<div class="field-label">Square Footage:</div>
<select id="SQ_FOOTAGE" name="SQ_FOOTAGE" class="large-control search-form-select" style="vertical-align: middle; width: 100%" onclick="" onchange="">
<option value="null">Any</option>
<option value="400">Min 400 sq ft</option>
<option value="500">Min 500 sq ft</option>
<option value="600">Min 600 sq ft</option>
<option value="700">Min 700 sq ft</option>
<option value="800">Min 800 sq ft</option>
<option value="900">Min 900 sq ft</option>
<option value="1000">Min 1,000 sq ft</option>
<option value="1200">Min 1,200 sq ft</option>
<option value="1500">Min 1,500 sq ft</option>
<option value="2000">Min 2,000 sq ft</option>
<option value="2500">Min 2,500 sq ft</option>
<option value="3000">Min 3,000 sq ft</option>
<option value="3500">Min 3,500 sq ft</option>
</select>

	</td>
</tr>

<tr>
	<td valign="top" align="left" width="33%">
		<div class="field-label">Land size:</div>
<select id="LAND_SIZE" name="LAND_SIZE" class="large-control search-form-select" style="vertical-align: middle; width: 100%" onclick="" onchange="">
<option value="null">Any</option>
<option value="5000">Min 5,000 sq ft</option>
<option value="7500">Min 7,500 sq ft</option>
<option value="10000">Min 10,000 sq ft</option>
<option value="20000">Min 20,000 sq ft</option>
<option value="30000">Min 30,000 sq ft</option>
<option value="40000">Min 40,000 sq ft</option>
<option value="50000">Min 50,000 sq ft</option>
<option value="75000">Min 75,000 sq ft</option>
<option value="100000">Min 100,000 sq ft</option>
<option value="21780.0">Min 0.5 acre</option>
<option value="43560.0">Min 1 acre</option>
<option value="87120.0">Min 2 acres</option>
<option value="130680.0">Min 3 acres</option>
<option value="174240.0">Min 4 acres</option>
<option value="217800.0">Min 5 acres</option>
<option value="261360.0">Min 6 acres</option>
<option value="304920.0">Min 7 acres</option>
<option value="348480.0">Min 8 acres</option>
<option value="392040.0">Min 9 acres</option>
<option value="435600.0">Min 10 acres</option>
<option value="2178000.0">Min 50 acres</option>
<option value="4356000.0">Min 100 acres</option>
<option value="1.089E7">Min 250 acres</option>
<option value="2.178E7">Min 500 acres</option>
<option value="4.356E7">Min 1000 acres</option>
</select>

	</td>
	<td valign="top" align="left" width="33%">
		<div class="field-label">Kitchens:</div>
<select id="KITCHENS" name="KITCHENS" class="large-control search-form-select" style="vertical-align: middle; width: 100%" onclick="" onchange="">
<option value="null">Doesn't matter</option>
<option value="1">Min 1 kitchens</option>
<option value="2">Min 2 kitchens</option>
<option value="3">Min 3 kitchens</option>
<option value="4">Min 4 kitchens</option>
<option value="5">Min 5 kitchens</option>
<option value="6">Min 6 kitchens</option>
<option value="7">Min 7 kitchens</option>
</select>

	</td>
</tr>
</tbody></table>

<div class="graphic-map-search-more-options-link"><a href="javascript:;" id="optionalPaneLink" onclick="toggleOptionalPane(this,'more-options', 'moreOptionsToggle' ); return false;">+ Show More Options</a></div>

<input type="hidden" name="moreOptionsToggle" id="moreOptionsToggle" value="false">
<table id="more-options" cellpadding="5" cellspacing="0" class="more-options-container" width="100%" style="position: relative; margin-top: 10px; display: none;">
	<tbody><tr>
	<td valign="top" align="left" width="50%">
	<div class="field-label"><nobr>Dwelling Types:
			<span id="DWELLING_TYPE-selectLabel" class="">0</span></nobr></div>
<div id="DWELLING_TYPE" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; height: 150px">
<input type="hidden" name="DWELLING_TYPE" value="">
	<div id="DWELLING_TYPE_0"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="DUPXH" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">1/2 Duplex</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_1"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="APTU" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Apartment/Condo</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_2"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="DUPLX" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Duplex</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_3"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="4PLEX" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Fourplex</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_4"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="HACR" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">House with Acreage</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_5"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="HOUSE" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">House/Single Family</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_6"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="MANUF" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Manufactured</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_7"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="MNFLD" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Manufactured with Land</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_8"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="OTHER" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Other</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_9"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="RECRE" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Recreational</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_10"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="ROWHS" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Row House (Non-Strata)</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_11"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="TWNHS" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Townhouse</span>
	</label></nobr></div>
	<div id="DWELLING_TYPE_12"><nobr>
	<label>
	<input type="checkbox" name="DWELLING_TYPE" value="3PLEX" onclick="toggleAllMultiList(this,'DWELLING_TYPE','DWELLING_TYPE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Triplex</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('DWELLING_TYPE');
	updateMultiListSummary('DWELLING_TYPE','DWELLING_TYPE-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('DWELLING_TYPE','DWELLING_TYPE-selectLabel');
</script>
	</td>
	<td valign="top" align="left" width="50%">
	<div class="field-label"><nobr>House Styles:
			<span id="HOUSE_STYLES-selectLabel" class="">0</span></nobr></div>
<div id="HOUSE_STYLES" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; height: 150px">
<input type="hidden" name="HOUSE_STYLES" value="">
	<div id="HOUSE_STYLES_0"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="1ST" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">1 Storey</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_1"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="1ST+" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">1 1/2 Storey</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_2"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="2ST" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">2 Storey</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_3"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="2BSMT" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">2 Storey w/Bsmt.</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_4"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="3ST" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">3 Storey</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_5"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="3LEV" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">3 Level Split</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_6"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="4LEV" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">4 Level Split</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_7"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="5LEV" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">5 Plus Level</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_8"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="CARRI" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Carriage/Coach House</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_9"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="BSMNT" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Basement Entry</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_10"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="SPLIT" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Split Entry</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_11"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="FLOAT" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Floating Home</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_12"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="LANE" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Laneway House</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_13"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="MANUF" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Manufactured/Mobile</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_14"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="RANBG" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Rancher/Bungalow</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_15"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="RBBMT" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Rancher/Bungalow w/Bsmt.</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_16"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="RBLFT" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Rancher/Bungalow w/Loft</span>
	</label></nobr></div>
	<div id="HOUSE_STYLES_17"><nobr>
	<label>
	<input type="checkbox" name="HOUSE_STYLES" value="OTHER" onclick="toggleAllMultiList(this,'HOUSE_STYLES','HOUSE_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Other</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('HOUSE_STYLES');
	updateMultiListSummary('HOUSE_STYLES','HOUSE_STYLES-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('HOUSE_STYLES','HOUSE_STYLES-selectLabel');
</script>
	</td>
	</tr>
	<tr>
	<td valign="top" align="left" width="50%">
	<div class="field-label"><nobr>Condo Styles:
			<span id="CONDO_STYLES-selectLabel" class="">0</span></nobr></div>
<div id="CONDO_STYLES" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; height: 150px">
<input type="hidden" name="CONDO_STYLES" value="">
	<div id="CONDO_STYLES_0"><nobr>
	<label>
	<input type="checkbox" name="CONDO_STYLES" value="CORNU" onclick="toggleAllMultiList(this,'CONDO_STYLES','CONDO_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Corner Unit</span>
	</label></nobr></div>
	<div id="CONDO_STYLES_1"><nobr>
	<label>
	<input type="checkbox" name="CONDO_STYLES" value="EUNIT" onclick="toggleAllMultiList(this,'CONDO_STYLES','CONDO_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">End Unit</span>
	</label></nobr></div>
	<div id="CONDO_STYLES_2"><nobr>
	<label>
	<input type="checkbox" name="CONDO_STYLES" value="GUNIT" onclick="toggleAllMultiList(this,'CONDO_STYLES','CONDO_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Ground Level Unit</span>
	</label></nobr></div>
	<div id="CONDO_STYLES_3"><nobr>
	<label>
	<input type="checkbox" name="CONDO_STYLES" value="IUNIT" onclick="toggleAllMultiList(this,'CONDO_STYLES','CONDO_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Inside Unit</span>
	</label></nobr></div>
	<div id="CONDO_STYLES_4"><nobr>
	<label>
	<input type="checkbox" name="CONDO_STYLES" value="LWST" onclick="toggleAllMultiList(this,'CONDO_STYLES','CONDO_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Live/Work Studio</span>
	</label></nobr></div>
	<div id="CONDO_STYLES_5"><nobr>
	<label>
	<input type="checkbox" name="CONDO_STYLES" value="LFTWC" onclick="toggleAllMultiList(this,'CONDO_STYLES','CONDO_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Loft/Warehouse Conv.</span>
	</label></nobr></div>
	<div id="CONDO_STYLES_6"><nobr>
	<label>
	<input type="checkbox" name="CONDO_STYLES" value="UUNIT" onclick="toggleAllMultiList(this,'CONDO_STYLES','CONDO_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Upper Unit</span>
	</label></nobr></div>
	<div id="CONDO_STYLES_7"><nobr>
	<label>
	<input type="checkbox" name="CONDO_STYLES" value="PENT" onclick="toggleAllMultiList(this,'CONDO_STYLES','CONDO_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Penthouse</span>
	</label></nobr></div>
	<div id="CONDO_STYLES_8"><nobr>
	<label>
	<input type="checkbox" name="CONDO_STYLES" value="OTHER" onclick="toggleAllMultiList(this,'CONDO_STYLES','CONDO_STYLES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Other</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('CONDO_STYLES');
	updateMultiListSummary('CONDO_STYLES','CONDO_STYLES-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('CONDO_STYLES','CONDO_STYLES-selectLabel');
</script>
	</td>
	<td valign="top" align="left" width="50%">
	<div class="field-label"><nobr>Suite:
			<span id="SUITE-selectLabel" class="">0</span></nobr></div>
<div id="SUITE" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; height: 150px">
<input type="hidden" name="SUITE" value="">
	<div id="SUITE_0"><nobr>
	<label>
	<input type="checkbox" name="SUITE" value="LEGAL" onclick="toggleAllMultiList(this,'SUITE','SUITE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Legal Suite</span>
	</label></nobr></div>
	<div id="SUITE_1"><nobr>
	<label>
	<input type="checkbox" name="SUITE" value="LICEN" onclick="toggleAllMultiList(this,'SUITE','SUITE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Licensed Suite</span>
	</label></nobr></div>
	<div id="SUITE_2"><nobr>
	<label>
	<input type="checkbox" name="SUITE" value="OTHER" onclick="toggleAllMultiList(this,'SUITE','SUITE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Other</span>
	</label></nobr></div>
	<div id="SUITE_3"><nobr>
	<label>
	<input type="checkbox" name="SUITE" value="UNAUT" onclick="toggleAllMultiList(this,'SUITE','SUITE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Unauthorized Suite</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('SUITE');
	updateMultiListSummary('SUITE','SUITE-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('SUITE','SUITE-selectLabel');
</script>
	</td>
	</tr>
	<tr>
	<td valign="top" align="left" width="50%">
	<div class="field-label"><nobr>Site Influences:
			<span id="SITE_INFLUENCES-selectLabel" class="">0</span></nobr></div>
<div id="SITE_INFLUENCES" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; height: 150px">
<input type="hidden" name="SITE_INFLUENCES" value="">
	<div id="SITE_INFLUENCES_0"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="ADULT" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Adult Oriented</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_1"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="CENTR" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Central Location</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_2"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="CLEAR" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Cleared</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_3"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="CULD" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Cul-de-Sac</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_4"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="GATED" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Gated Complex</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_5"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="GCDEV" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Golf Course Dev.</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_6"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="GCNR" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Golf Course Nearby</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_7"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="GVRD" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Gravel Road</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_8"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="GREEN" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Greenbelt</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_9"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="LANE" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Lane Access</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_10"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="MFLND" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Managed Forest Land</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_11"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="MARIN" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Marina Nearby</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_12"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="PVRD" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Paved Road</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_13"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="PRSET" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Private Setting</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_14"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="PRVYD" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Private Yard</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_15"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="RECNR" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Recreation Nearby</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_16"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="RETCO" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Retirement Community</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_17"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="RURAL" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Rural Setting</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_18"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="SHPNR" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Shopping Nearby</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_19"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="SKINR" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Ski Hill Nearby</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_20"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="TREED" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Treed</span>
	</label></nobr></div>
	<div id="SITE_INFLUENCES_21"><nobr>
	<label>
	<input type="checkbox" name="SITE_INFLUENCES" value="WATFP" onclick="toggleAllMultiList(this,'SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Waterfront Property</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('SITE_INFLUENCES');
	updateMultiListSummary('SITE_INFLUENCES','SITE_INFLUENCES-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('SITE_INFLUENCES','SITE_INFLUENCES-selectLabel');
</script>
	</td>
	<td valign="top" align="left" width="50%">
	<div class="field-label"><nobr>Amenities:
			<span id="AMENITIES-selectLabel" class="">0</span></nobr></div>
<div id="AMENITIES" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; height: 150px">
<input type="hidden" name="AMENITIES" value="">
	<div id="AMENITIES_0"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="AIRCO" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Air Cond./Central</span>
	</label></nobr></div>
	<div id="AMENITIES_1"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="ASSTL" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Assisted Living</span>
	</label></nobr></div>
	<div id="AMENITIES_2"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="BARN" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Barn</span>
	</label></nobr></div>
	<div id="AMENITIES_3"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="BKRM" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Bike Room</span>
	</label></nobr></div>
	<div id="AMENITIES_4"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="CLUBH" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Club House</span>
	</label></nobr></div>
	<div id="AMENITIES_5"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="CMEAL" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Community Meals</span>
	</label></nobr></div>
	<div id="AMENITIES_6"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="CONCI" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Concierge</span>
	</label></nobr></div>
	<div id="AMENITIES_7"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="DAYCR" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Day Care Centre</span>
	</label></nobr></div>
	<div id="AMENITIES_8"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="ELEV" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Elevator</span>
	</label></nobr></div>
	<div id="AMENITIES_9"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="EXCTR" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Exercise Centre</span>
	</label></nobr></div>
	<div id="AMENITIES_10"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="GRDEN" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Garden</span>
	</label></nobr></div>
	<div id="AMENITIES_11"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="GRNHS" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Green House</span>
	</label></nobr></div>
	<div id="AMENITIES_12"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="GSUIT" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Guest Suite</span>
	</label></nobr></div>
	<div id="AMENITIES_13"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="ISLA" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">In Suite Laundry</span>
	</label></nobr></div>
	<div id="AMENITIES_14"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="INDLV" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Independent living</span>
	</label></nobr></div>
	<div id="AMENITIES_15"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="NONE" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">None</span>
	</label></nobr></div>
	<div id="AMENITIES_16"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="PLYGD" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Playground</span>
	</label></nobr></div>
	<div id="AMENITIES_17"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="IPOOL" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Pool; Indoor</span>
	</label></nobr></div>
	<div id="AMENITIES_18"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="OPOOL" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Pool; Outdoor</span>
	</label></nobr></div>
	<div id="AMENITIES_19"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="RECRE" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Recreation Center</span>
	</label></nobr></div>
	<div id="AMENITIES_20"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="RSTR" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Restaurant</span>
	</label></nobr></div>
	<div id="AMENITIES_21"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="SSTRM" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Sauna/Steam Room</span>
	</label></nobr></div>
	<div id="AMENITIES_22"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="SHLA" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Shared Laundry</span>
	</label></nobr></div>
	<div id="AMENITIES_23"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="STORE" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Storage</span>
	</label></nobr></div>
	<div id="AMENITIES_24"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="SWPHT" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Swirlpool/Hot Tub</span>
	</label></nobr></div>
	<div id="AMENITIES_25"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="TENN" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Tennis Court(s)</span>
	</label></nobr></div>
	<div id="AMENITIES_26"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="WHKP" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Weekly Housekeeping</span>
	</label></nobr></div>
	<div id="AMENITIES_27"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="WHEEL" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Wheelchair Access</span>
	</label></nobr></div>
	<div id="AMENITIES_28"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="WKATT" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Workshop Attached</span>
	</label></nobr></div>
	<div id="AMENITIES_29"><nobr>
	<label>
	<input type="checkbox" name="AMENITIES" value="WKDET" onclick="toggleAllMultiList(this,'AMENITIES','AMENITIES-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Workshop Detached</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('AMENITIES');
	updateMultiListSummary('AMENITIES','AMENITIES-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('AMENITIES','AMENITIES-selectLabel');
</script>
	</td>
	</tr>
	<tr>
	<td valign="top" align="left" width="50%">
	<div class="field-label"><nobr>Basement:
			<span id="BASEMENT-selectLabel" class="">0</span></nobr></div>
<div id="BASEMENT" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; height: 150px">
<input type="hidden" name="BASEMENT" value="">
	<div id="BASEMENT_0"><nobr>
	<label>
	<input type="checkbox" name="BASEMENT" value="Crawl" onclick="toggleAllMultiList(this,'BASEMENT','BASEMENT-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Crawl</span>
	</label></nobr></div>
	<div id="BASEMENT_1"><nobr>
	<label>
	<input type="checkbox" name="BASEMENT" value="Full" onclick="toggleAllMultiList(this,'BASEMENT','BASEMENT-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Full</span>
	</label></nobr></div>
	<div id="BASEMENT_2"><nobr>
	<label>
	<input type="checkbox" name="BASEMENT" value="Fully Finished" onclick="toggleAllMultiList(this,'BASEMENT','BASEMENT-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Fully Finished</span>
	</label></nobr></div>
	<div id="BASEMENT_3"><nobr>
	<label>
	<input type="checkbox" name="BASEMENT" value="None" onclick="toggleAllMultiList(this,'BASEMENT','BASEMENT-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">None</span>
	</label></nobr></div>
	<div id="BASEMENT_4"><nobr>
	<label>
	<input type="checkbox" name="BASEMENT" value="Part" onclick="toggleAllMultiList(this,'BASEMENT','BASEMENT-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Part</span>
	</label></nobr></div>
	<div id="BASEMENT_5"><nobr>
	<label>
	<input type="checkbox" name="BASEMENT" value="Partly Finished" onclick="toggleAllMultiList(this,'BASEMENT','BASEMENT-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Partly Finished</span>
	</label></nobr></div>
	<div id="BASEMENT_6"><nobr>
	<label>
	<input type="checkbox" name="BASEMENT" value="Separate Entry" onclick="toggleAllMultiList(this,'BASEMENT','BASEMENT-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Separate Entry</span>
	</label></nobr></div>
	<div id="BASEMENT_7"><nobr>
	<label>
	<input type="checkbox" name="BASEMENT" value="Unfinished" onclick="toggleAllMultiList(this,'BASEMENT','BASEMENT-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Unfinished</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('BASEMENT');
	updateMultiListSummary('BASEMENT','BASEMENT-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('BASEMENT','BASEMENT-selectLabel');
</script>
	</td>
	<td valign="top" align="left" width="50%">
	<div class="field-label"><nobr>Parking:
			<span id="PARKING-selectLabel" class="">0</span></nobr></div>
<div id="PARKING" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; height: 150px">
<input type="hidden" name="PARKING" value="">
	<div id="PARKING_0"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Add. Parking Avail." onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Add. Parking Avail.</span>
	</label></nobr></div>
	<div id="PARKING_1"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Carport &amp; Garage" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Carport &amp; Garage</span>
	</label></nobr></div>
	<div id="PARKING_2"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Carport; Multiple" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Carport; Multiple</span>
	</label></nobr></div>
	<div id="PARKING_3"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Carport; Single" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Carport; Single</span>
	</label></nobr></div>
	<div id="PARKING_4"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="DetachedGrge/Carport" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">DetachedGrge/Carport</span>
	</label></nobr></div>
	<div id="PARKING_5"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Garage Underbuilding" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Garage Underbuilding</span>
	</label></nobr></div>
	<div id="PARKING_6"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Garage; Double" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Garage; Double</span>
	</label></nobr></div>
	<div id="PARKING_7"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Garage; Single" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Garage; Single</span>
	</label></nobr></div>
	<div id="PARKING_8"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Garage; Triple" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Garage; Triple</span>
	</label></nobr></div>
	<div id="PARKING_9"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Garage; Underground" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Garage; Underground</span>
	</label></nobr></div>
	<div id="PARKING_10"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Grge/Double Tandem" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Grge/Double Tandem</span>
	</label></nobr></div>
	<div id="PARKING_11"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="None" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">None</span>
	</label></nobr></div>
	<div id="PARKING_12"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Open" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Open</span>
	</label></nobr></div>
	<div id="PARKING_13"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Other" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Other</span>
	</label></nobr></div>
	<div id="PARKING_14"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="RV Parking Avail." onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">RV Parking Avail.</span>
	</label></nobr></div>
	<div id="PARKING_15"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Tandem Parking" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Tandem Parking</span>
	</label></nobr></div>
	<div id="PARKING_16"><nobr>
	<label>
	<input type="checkbox" name="PARKING" value="Visitor Parking" onclick="toggleAllMultiList(this,'PARKING','PARKING-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Visitor Parking</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('PARKING');
	updateMultiListSummary('PARKING','PARKING-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('PARKING','PARKING-selectLabel');
</script>
	</td>
	</tr>
	<tr>
	<td valign="top" align="left" width="50%">
	<div class="field-label"><nobr>View:
			<span id="VIEW-selectLabel" class="">0</span></nobr></div>
<div id="VIEW" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; height: 150px">
<input type="hidden" name="VIEW" value="">
	<div id="VIEW_0"><nobr>
	<label>
	<input type="checkbox" name="VIEW" value="No" onclick="toggleAllMultiList(this,'VIEW','VIEW-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">No</span>
	</label></nobr></div>
	<div id="VIEW_1"><nobr>
	<label>
	<input type="checkbox" name="VIEW" value="Yes" onclick="toggleAllMultiList(this,'VIEW','VIEW-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Yes</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('VIEW');
	updateMultiListSummary('VIEW','VIEW-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('VIEW','VIEW-selectLabel');
</script>
	</td>
	<td valign="top" align="left" width="50%">
	<div class="field-label"><nobr>By-Law Restrictions:
			<span id="BYLAW_RESTRICTIONS-selectLabel" class="">0</span></nobr></div>
<div id="BYLAW_RESTRICTIONS" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; height: 150px">
<input type="hidden" name="BYLAW_RESTRICTIONS" value="">
	<div id="BYLAW_RESTRICTIONS_0"><nobr>
	<label>
	<input type="checkbox" name="BYLAW_RESTRICTIONS" value="AGER" onclick="toggleAllMultiList(this,'BYLAW_RESTRICTIONS','BYLAW_RESTRICTIONS-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Age Restrictions</span>
	</label></nobr></div>
	<div id="BYLAW_RESTRICTIONS_1"><nobr>
	<label>
	<input type="checkbox" name="BYLAW_RESTRICTIONS" value="NO" onclick="toggleAllMultiList(this,'BYLAW_RESTRICTIONS','BYLAW_RESTRICTIONS-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">No Restrictions</span>
	</label></nobr></div>
	<div id="BYLAW_RESTRICTIONS_2"><nobr>
	<label>
	<input type="checkbox" name="BYLAW_RESTRICTIONS" value="PETY" onclick="toggleAllMultiList(this,'BYLAW_RESTRICTIONS','BYLAW_RESTRICTIONS-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Pets Allowed</span>
	</label></nobr></div>
	<div id="BYLAW_RESTRICTIONS_3"><nobr>
	<label>
	<input type="checkbox" name="BYLAW_RESTRICTIONS" value="PETR" onclick="toggleAllMultiList(this,'BYLAW_RESTRICTIONS','BYLAW_RESTRICTIONS-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Pets Allowed w/Rest.</span>
	</label></nobr></div>
	<div id="BYLAW_RESTRICTIONS_4"><nobr>
	<label>
	<input type="checkbox" name="BYLAW_RESTRICTIONS" value="PETN" onclick="toggleAllMultiList(this,'BYLAW_RESTRICTIONS','BYLAW_RESTRICTIONS-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Pets Not Allowed</span>
	</label></nobr></div>
	<div id="BYLAW_RESTRICTIONS_5"><nobr>
	<label>
	<input type="checkbox" name="BYLAW_RESTRICTIONS" value="RENY" onclick="toggleAllMultiList(this,'BYLAW_RESTRICTIONS','BYLAW_RESTRICTIONS-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Rentals Allowed</span>
	</label></nobr></div>
	<div id="BYLAW_RESTRICTIONS_6"><nobr>
	<label>
	<input type="checkbox" name="BYLAW_RESTRICTIONS" value="RENR" onclick="toggleAllMultiList(this,'BYLAW_RESTRICTIONS','BYLAW_RESTRICTIONS-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Rentals Allwd w/Restrctns</span>
	</label></nobr></div>
	<div id="BYLAW_RESTRICTIONS_7"><nobr>
	<label>
	<input type="checkbox" name="BYLAW_RESTRICTIONS" value="RENN" onclick="toggleAllMultiList(this,'BYLAW_RESTRICTIONS','BYLAW_RESTRICTIONS-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Rentals Not Allowed</span>
	</label></nobr></div>
	<div id="BYLAW_RESTRICTIONS_8"><nobr>
	<label>
	<input type="checkbox" name="BYLAW_RESTRICTIONS" value="SMKG" onclick="toggleAllMultiList(this,'BYLAW_RESTRICTIONS','BYLAW_RESTRICTIONS-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Smoking Restrictions</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('BYLAW_RESTRICTIONS');
	updateMultiListSummary('BYLAW_RESTRICTIONS','BYLAW_RESTRICTIONS-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('BYLAW_RESTRICTIONS','BYLAW_RESTRICTIONS-selectLabel');
</script>
	</td>
	</tr>
	<tr>
	<td valign="top" align="left" width="50%">
	<div class="field-label"><nobr>Age Restriction:
			<span id="RESTRICTED_AGE-selectLabel" class="">0</span></nobr></div>
<div id="RESTRICTED_AGE" class="search-form-multi-list " style="overflow-x: hidden; overflow-y: auto; height: 150px">
<input type="hidden" name="RESTRICTED_AGE" value="">
	<div id="RESTRICTED_AGE_0"><nobr>
	<label>
	<input type="checkbox" name="RESTRICTED_AGE" value="19+" onclick="toggleAllMultiList(this,'RESTRICTED_AGE','RESTRICTED_AGE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">19+</span>
	</label></nobr></div>
	<div id="RESTRICTED_AGE_1"><nobr>
	<label>
	<input type="checkbox" name="RESTRICTED_AGE" value="45+" onclick="toggleAllMultiList(this,'RESTRICTED_AGE','RESTRICTED_AGE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">45+</span>
	</label></nobr></div>
	<div id="RESTRICTED_AGE_2"><nobr>
	<label>
	<input type="checkbox" name="RESTRICTED_AGE" value="55+" onclick="toggleAllMultiList(this,'RESTRICTED_AGE','RESTRICTED_AGE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">55+</span>
	</label></nobr></div>
	<div id="RESTRICTED_AGE_3"><nobr>
	<label>
	<input type="checkbox" name="RESTRICTED_AGE" value="65+" onclick="toggleAllMultiList(this,'RESTRICTED_AGE','RESTRICTED_AGE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">65+</span>
	</label></nobr></div>
	<div id="RESTRICTED_AGE_4"><nobr>
	<label>
	<input type="checkbox" name="RESTRICTED_AGE" value="OTHER" onclick="toggleAllMultiList(this,'RESTRICTED_AGE','RESTRICTED_AGE-selectLabel'); ">
	<span style="cursor: pointer;" class="large-control">Other</span>
	</label></nobr></div>
</div>
<div class="control-links" style="margin: 5px 0px 5px 0px">
<a href="javascript:;" onclick="deselectAllMultiList('RESTRICTED_AGE');
	updateMultiListSummary('RESTRICTED_AGE','RESTRICTED_AGE-selectLabel'); return false;">Clear</a>
</div>
<script>
updateMultiListSummary('RESTRICTED_AGE','RESTRICTED_AGE-selectLabel');
</script>
	</td>
</tr></tbody></table>
</div>
</div>
<map name="Map" id="ImageMap">
	<area rel="F" title="Fraser Valley" shape="poly" coords="174,182,174,200,252,200,252,182">
	<area rel="F" title="Fraser Valley" shape="poly" coords="182,210,181,244,181,256,178,255,174,257,165,252,156,253,153,255,149,262,151,264,151,268,153,272,157,272,153,276,156,281,166,284,223,284,223,281,228,281,228,277,226,277,226,264,235,258,238,252,246,242,253,241,250,231,246,210">
	<area rel="V" title="Greater Vancouver" shape="poly" coords="121,217,122,226,117,232,119,238,123,236,130,239,129,241,130,245,127,246,121,244,118,248,125,253,124,258,125,266,123,268,129,276,133,278,135,284,141,284,139,280,142,276,151,273,153,272,151,268,151,264,149,262,153,255,156,253,165,252,174,257,178,255,181,256,181,244,173,243,170,245,167,245,167,230,160,230,160,239,150,239,153,234,155,223,154,218,121,217">
	<area rel="V" title="Greater Vancouver" shape="poly" coords="126,287,126,306,236,306,236,287">
	<area rel="H" title="Chilliwack" shape="poly" coords="274,233,271,234,258,236,253,241,246,242,240,249,238,252,235,258,226,264,226,277,228,277,228,279,228,281,223,281,223,284,235,284,235,280,238,278,240,274,251,275,263,274,268,272,273,273,274,273,274,273,274,270,274,270,273,270,270,269,266,269,263,272,252,272,252,268,254,268,255,262,260,258,272,241,274,238,274,233">
	<area rel="H" title="Chilliwack" shape="poly" coords="210,311,210,329,274,329,274,311">
	<area rel="W" title="Whistler" shape="poly" coords="69,113,69,131,125,131,125,113">
	<area rel="W" title="Whistler" shape="poly" coords="151,119,146,121,146,123,146,124,142,129,133,132,133,133,135,133,141,131,146,131,151,127,149,124,152,120,151,119">
	<area rel="S" title="Squamish" shape="poly" coords="109,133,109,151,173,151,173,133">
	<area rel="S" title="Squamish" shape="poly" coords="129,162,128,163,129,167,128,171,128,171,128,171,127,174,130,179,129,181,129,187,124,194,124,197,126,196,125,194,133,185,135,181,135,178,132,178,130,171,131,166,129,162">
	<area rel="P" title="Pemberton" shape="poly" coords="190,64,190,67,188,70,172,77,167,93,161,95,158,91,148,73,139,70,142,73,147,75,155,92,160,96,160,100,171,100,182,101,181,99,171,97,174,79,190,71,193,67,193,65,190,64">
	<area rel="P" title="Pemberton" shape="poly" coords="79,85,79,103,148,103,148,85">
	<area rel="VBDBD" title="Bowen Island" shape="poly" coords="142,156,142,174,225,174,225,156">
	<area rel="VBDBD" title="Bowen Island" shape="poly" coords="115,225,111,226,108,228,104,232,104,233,105,233,105,235,104,235,104,236,105,237,111,237,111,236,112,235,113,233,113,232,115,229,114,229,115,227,116,226,115,225">
	<area rel="I" title="Islands-Van. &amp; Gulf" shape="poly" coords="48,171,43,174,30,178,26,183,11,177,11,177,11,229,11,229,58,248,64,262,72,268,79,287,91,305,91,311,93,313,91,319,97,326,119,327,141,318,142,312,135,306,126,306,126,298,81,260,98,238,108,227,118,220,111,207,100,211,102,224,96,232,75,227,58,217,57,214,52,210,44,197,44,192,45,186,48,181,48,179,56,174,52,171">
	<area rel="I" title="Islands-Van. &amp; Gulf" shape="poly" coords="45,336,45,355,155,355,155,336">
	<area rel="SC" title="Sunshine Coast" shape="poly" coords="37,153,37,171,128,171,128,153">
	<area rel="SC" title="Sunshine Coast" shape="poly" coords="55,176,49,180,49,182,46,186,45,192,46,198,47,199,50,199,52,206,55,211,55,212,57,213,60,212,60,214,61,216,64,218,66,218,71,219,75,218,77,222,81,223,84,226,85,225,90,228,92,228,92,229,94,230,97,230,98,229,97,228,100,225,101,222,99,217,100,216,99,213,100,210,109,205,112,206,113,204,118,202,121,197,120,191,123,189,92,189,82,194,79,194,71,199,72,205,73,207,73,209,73,211,75,214,74,216,73,214,71,212,71,209,69,200,67,197,64,189,62,185,62,181,60,178,55,176">
</map></div>

<div class="additional-search-controls" style="text-align: right">
Listed:
<select id="listedDate" name="listedDate">
<option value="" selected="">--- Select when ---</option>
<option value="P-1D">1 day ago at most</option>
<option value="P-2D">2 days ago at most</option>
<option value="P-3D">3 days ago at most</option>
<option value="P-1W">1 week ago at most</option>
<option value="P-2W">2 weeks ago at most</option>
<option value="P-3W">3 weeks ago at most</option>
<option value="P-1M">1 month ago at most</option>
<option value="P-2M">2 months ago at most</option>
<option value="P-3M">3 months ago at most</option>
<option value="P-4M">4 months ago at most</option>
<option value="P-5M">5 months ago at most</option>
<option value="P-6M">6 months ago at most</option>
<option value="P-1Y">1 year ago at most</option>
<option value="P-1D-">1 day ago at least</option>
<option value="P-2D-">2 days ago at least</option>
<option value="P-3D-">3 days ago at least</option>
<option value="P-1W-">1 week ago at least</option>
<option value="P-2W-">2 weeks ago at least</option>
<option value="P-3W-">3 weeks ago at least</option>
<option value="P-1M-">1 month ago at least</option>
<option value="P-2M-">2 months ago at least</option>
<option value="P-3M-">3 months ago at least</option>
<option value="P-4M-">4 months ago at least</option>
<option value="P-5M-">5 months ago at least</option>
<option value="P-6M-">6 months ago at least</option>
<option value="P-1Y-">1 year ago at least</option>
</select>
Open House:
<select id="openHouse" name="openHouse">
<option value="" selected="">--- Select day ---</option>
<option value="a">Any</option>
<option value="t">Today</option>
<option value="m">Tomorrow</option>
<option value="w">This Weekend</option>
<option value="7">This Saturday</option>
<option value="1">This Sunday</option>
<option value="2">This Monday</option>
<option value="3">This Tuesday</option>
<option value="4">This Wednesday</option>
<option value="5">This Thursday</option>
<option value="6">This Friday</option>
</select>
<input type="hidden" name="_priceReduction" value="on">
<label><input type="checkbox" name="priceReduction" id="priceReduction" value="true">
Price Reduction</label>
</div>

<div class="mrp-search-form-buttons-container" style="padding: 0px 0px 30px 0px; text-align: right;">
<input type="button" name="startOverButton" value="Start Over" class="form-button-large" style="width: 120px; float: left;" onclick="return startOver();">
<input type="button" id="saveSearchButton" name="saveSearchButon" class="form-button-large" onclick="publishToBus('save.search', { 'referrer' : '' }, false )" value="Save" style="width: 120px;">
<input type="submit" id="finishSearchButton" name="finishSearch" class="form-button-large" value="Search" style="margin-left: 10px; width: 120px; font-weight: bold;">
</div>
<input type="hidden" name="clearSession" value="">
<input type="hidden" name="saveSearch" value="">
<input type="hidden" name="_sf_" value="graphicmap,GV,AUTO">
</form>

<div style="float: left; margin-top: 10px;">

<script>
function startOver()
{
	var url = window.location.href;
	if( url.indexOf( "startOver=true" ) == -1 ) {
		if( url && url.indexOf( "?" ) != -1 ) {
			url += "&startOver=true";
		}
		else if( url ) {
			url += "?startOver=true";
		}
	}
	window.location = url;
	return false;
}
</script>
<a href="/wps/rest/11951/l/mobile-inquiry" class="mobile-inquiry-link" onclick="return openIPhoneInquiry( this.href, 580 );" target="_new">Get Smartphone App URL</a>
</div>


<div class="powered-by">powered by <a href="http://myrealpage.com" target="_new">myRealPage.com</a></div>
<div style="clear: both"></div>

<div style="text-align: left" class="search-form-footer">
<div style="font: 10px Helvetica; margin-top: 15px; padding-top: 10px; border-top: 1px solid gray;">
<div style="float: right; margin: 0 0 5px 10px;">
<img src="//res.myrealpage.com/wps/img/regional/icon-gv-recip-standard.gif" border="0" crossorigin="anonymous">
</div>
<div>
The data relating to real estate on this website comes in part from the MLS® Reciprocity program of either the Real Estate Board of Greater Vancouver (REBGV), the Fraser Valley Real Estate Board (FVREB) or the Chilliwack and District Real Estate Board (CADREB). Real estate listings held by participating real estate firms are marked with the MLS® logo and detailed information about the listing includes the name of the listing agent. This representation is based in whole or part on data generated by either the REBGV, the FVREB or the CADREB which assumes no responsibility for its accuracy. The materials contained on this page may not be reproduced without the express written consent of either the REBGV, the FVREB or the CADREB.
</div>
</div></div>

<div style="clear: both;"></div>
</div>


<script>
ContentLoaded( function() { try { initForm() } catch( e ) {}; bodyOnLoad(); } );
</script>


<script id="__mrp_presenter_script" type="text/javascript" src="//res.myrealpage.com/wps/js/ng/popup-presentation.js"></script></body></html>
