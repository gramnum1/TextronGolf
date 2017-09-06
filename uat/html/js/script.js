

var AMERICAS=['AI','AG','AR','AW','BS','BB','BZ','BM','BO','BR','VG','KY','CL','CO','CR','DM','DO','EC','SV','GF','GD','GP','GT','GY','HT','HN','JM','MQ','MX','MS','NI','PA','PY','PE','PR','KN','LC','VC','SR','TT','US','UY','VE','VI'];

//Find your representatives
    //if country is the united state or canada lead to normal
    //otherwise lead to international
    
    
    //parts and accessories
    //if country in AMERICAS then shopezgo
    //id country is in canada then don't shopezgo.ca
    //otherwise dont display.  
    
function regionDependence(country){
  
    var shopezgo=$("#shopezgo");
    var shopjacobsen=$("#shopjacobsen");
    var ezgoRep=$("#ezgoRep");
    var cushmanRep=$("#cushmanRep");
    
    
    //Parts and accessories links
    if(AMERICAS.indexOf(country)>-1){
        //do nothing
    }else if(country=="CA"){
        shopezgo.attr("href", "http://www.shopezgo.ca/");
    //for all other countries uk included    
    }else{
        shopezgo.css("display", "none");
    }
    
    if(country != "US"){
        shopjacobsen.attr("href", "http://jacobsen.com/europe-parts-lookup/");
    }
    
    
    
    //Find Your Rep
    if(country!="US"&&country!="CA"){

        ezgoRep.attr("href","http://www.ezgo.com/Home/Other/InternationalDealers");
        
        cushmanRep.attr("href", "http://www.ezgo.com/Home/Other/InternationalDealers");
    
    
    }
    
    


    
    
  
  
    
    
    
  }
