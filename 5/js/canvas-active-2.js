/*
    
    Template Name: Financo
    Template URI: https://devitems.com/html/financo-preview/
    Description: This is html5 template
    Author: HasTech
    Author URI: https://devitems.com/
    Version: 1.0
    
*/

(function ($) {
	"use strict";
    
/*-------------------------------------------
    Home 3, Home 4 Page Graph
--------------------------------------------- */  
    window.onload = function () {
        var chart2 = new CanvasJS.Chart("chartContainer2",
        {
            backgroundColor: "#F5F7F9",
            animationEnabled: true,   
            axisY:{
            gridThickness: 1,
                gridDashType: "dash"
            }, 
            axisX:{
            gridThickness: 1,
                gridDashType: "dash"
            },            
            data: [{   
                fillOpacity: .85,   
                type: "splineArea",
                color: "#006B63",
                labelFontSize:0,
                markerSize: 7,
                markerColor: "#102756",
                markerBorderColor : "#ccc", //change color here
                markerBorderThickness: 1,
                showInLegend: false,
                risingColor: "#DD7E86",
                dataPoints: [
                {y: 30},     
                {y: 20},     
                {y: 30},     
                {y: 50},     
                {y: 30},     
                {y: 38},     
                {y: 60},     
                {y: 85},     
                {y: 70},     
                {y: 45},     
                {y: 55},     
                {y: 80}             
                ]
            },
            {   
                fillOpacity: .85,      
                type: "splineArea",
                color: "#002E5B",
                labelFontSize:0,
                markerSize: 7,
                markerColor: "#102756",
                markerBorderColor : "#ccc", //change color here
                markerBorderThickness: 1,
                showInLegend: false,
                dataPoints: [
                {y: 25},     
                {y: 17},     
                {y: 25},     
                {y: 45},     
                {y: 55},      
                {y: 40},     
                {y: 38},      
                {y: 55},     
                {y: 75},     
                {y: 52},    
                {y: 40},    
                {y: 55}             
                ]
            }]
        });
        chart2.render();
    };
 
})(jQuery);  