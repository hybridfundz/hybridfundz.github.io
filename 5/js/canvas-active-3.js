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
    Single Service Page Graph
--------------------------------------------- */  
    window.onload = function () {
        var chart3 = new CanvasJS.Chart("chartContainer3",
        {
            backgroundColor: "#fff",
            animationEnabled: true,   
            axisY:{
            gridThickness: 0,
            },            
            data: [{   
                fillOpacity: .85,   
                type: "splineArea",
                color: "#002E5B",
                labelFontSize:0,
                markerSize: 7,
                markerColor: "#102756",
                markerBorderColor : "#ccc", //change color here
                markerBorderThickness: 1,
                showInLegend: false,
                risingColor: "#DD7E86",
                dataPoints: [
                {y: 0},     
                {y: 0},     
                {y: 10},     
                {y: 40},     
                {y: 75},     
                {y: 20},     
                {y: 0},     
                {y: 9},     
                {y: 58},     
                {y: 11},     
                {y: 0},     
                {y: 0}             
                ]
            },
            {   
                fillOpacity: .85,      
                type: "splineArea",
                color: "#006B63",
                labelFontSize:0,
                markerSize: 7,
                markerColor: "#102756",
                markerBorderColor : "#ccc", //change color here
                markerBorderThickness: 1,
                showInLegend: false,
                dataPoints: [
                {y: 0},     
                {y: 6},     
                {y: 52},     
                {y: 10},     
                {y: 0},      
                {y: 4},     
                {y: 45},      
                {y: 0},     
                {y: 0},     
                {y: 4},    
                {y: 36},    
                {y: 0}             
                ]
            }]
        });
        chart3.render();
    };
 
})(jQuery);  