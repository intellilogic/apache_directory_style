; $(function(){ $.fn.go=function(){ var T=this; if(T.is('a')){ window.location=T.prop('href') } };
	var loc=document.location.pathname, domain=document.domain, currentPath='/', root=(loc==='/'),
		breadcrumbs='<a href="/">('+domain+')</a>/', columns=['icon','name','date','size','desc'], selector={};
	$.each(columns,function(i,c){i++; selector[c]='td:nth-child('+i+')' });
	$.each(loc.split("/"),function(i,dir){ if(dir){ currentPath+=dir+'/';
		breadcrumbs+='<a href="'+currentPath+'">'+dir+'</a>/'; } }); $('#folder').html(breadcrumbs);
	if(root){ $('#command').addClass('at_root'); } document.title=(root?domain+' (root)':domain+loc);
	$('tr').each(function(){ var T=$(this), name=T.find(selector['name']), desc=T.find(selector['desc']),
		date=T.find(selector['date']), desc_t=desc.text(); if(desc_t){ name.prop('title',desc_t); } });
	$('th, td').on('click',function(){ var T=$(this); if(T.is('th')){ T.find('a').go() }
		else if(T.is('td')){ T.parent('tr').find(selector['name']+' a').go() } });
});