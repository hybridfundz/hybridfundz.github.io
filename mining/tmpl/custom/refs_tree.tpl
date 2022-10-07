{assign var="allow" value="logged"}
{include file="header.tpl"}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/treant-js/1.0/Treant.css" integrity="sha512-ySoXPqkgXC7K7IS5vOdi47uEpct2yJ3MkYVVVHiM7FOmdDnBUVSmB/D1ps2Pf6jBJnBMyh1EPJLpWh2uCzOLdg==" crossorigin="anonymous" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js" integrity="sha512-tBzZQxySO5q5lqwLWfu8Q+o4VkTcRGOeQGVQ0ueJga4A1RKuzmAu5HXDOXLEjpbKyV7ow9ympVoa6wZLEzRzDg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/treant-js/1.0/Treant.min.js" integrity="sha512-ADpWKsaOuAegRSoUObE1si2VF6HQJyQR3Zy44l7s6YsGA6BnPIrIwN9uKJ0rsMhtDAMFqnGZhQXMJcsWSp40pA==" crossorigin="anonymous"></script>

{literal}
<style>
.Treant > .node {
text-align: center;
}
.Treant > .node p {
margin: 1px;
}
.Treant > .node img {
float:none;
}
.Treant > .node:hover .node-name:after {
  opacity: 1;
  display: inline-block;
}
.Treant > .node .node-name:after {
  white-space: pre;
  opacity: 0;
  content: 'Deposit: ' attr(data-deposit);
  position: absolute;
  top: 100%;
  left: 0;
  color: #fff;
  transition: opacity 0.3s;
  border-radius: 6px;
  background-color: #555;
  padding: 5px 5px;
  width: 120px;
  display: none;
  font-size: 90%;
  z-index: 1000;
  text-align: left;
}

</style>
<script>
function createTree(t) {
    var e = {
        chart: {
            container: "#refstree",
            rootOrientation: "NORTH",
            hideRootNode: false,
            nodeAlign: "top",
            siblingSeparation: 20,
            subTeeSeparation: 20,
            levelSeparation: 20,
            padding: 10,
            connectors: {
                type: "curve",
                style: {
                    stroke: "black",
		    "arrow-end": "classic-wide-long"
                }
            },
            node: {
                collapsable: 0,
            }
        },
        nodeStructure: t
    };

var chart_config = [e.chart];
for (i in t) {
chart_config.push(t[i]);
}

    new Treant(chart_config, function() {
//        $(".loader").spin(!1)
    })
}
</script>
{/literal}

<div id="refstree"></div>

{loaddata name="user_referrals" referrals=1 var=refs}
<script>
var t = {};
t[{$userinfo.id}] = {ldelim} text: {ldelim}name:"{$userinfo.username}"{rdelim}, image: "./images/user.png" {rdelim};
{foreach from=$refs.referrals item=lvl}
 {foreach from=$lvl item=r}
//t[{$r.id}] = {ldelim}parent: t[{$r.ref}], text: {ldelim}name:"{$r.username}", 'data-foo': "Deposit: {$r.deposits_amount|fiat}\nRef.Comm: {$r.ref_commission|fiat}"{rdelim}, image: "./images/user.png" {rdelim};
t[{$r.id}] = {ldelim}parent: t[{$r.ref}], innerHTML: '<img src="./images/user.png"><p class="node-name" data-deposit="{$r.deposits_amount|fiat}">{$r.username}</p>' {rdelim};
 {/foreach}
{/foreach}
createTree(t);
</script>



{*
<div id="container"></div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/sankey.js"></script>
<script src="https://code.highcharts.com/modules/organization.js"></script>
{loaddata name="user_referrals" referrals=1 var=refs}
<script>
var treeData = [];
{foreach from=$refs.referrals item=lvl}
 {foreach from=$lvl item=r}
treeData.push([{$r.ref}, {$r.id}, '{$r.username}']);
 {/foreach}
{/foreach}
</script>
{literal}
<script>
Highcharts.chart('container', {
    chart: {
        height: 600,
        inverted: true
    },

    title: {
        text: ''
    },
    series: [{
        type: 'organization',
        name: '',
        keys: ['from', 'to', 'name'],
        data: treeData,
        colorByPoint: false,
        color: '#007ad0',
        dataLabels: {
            color: 'white',
//            format: '<b>{series.name} {#each(point)}</b>',
            formatter: function(p) { alert(1); }
        },
        borderColor: 'white',
        nodeWidth: 85
    }],
    tooltip: {
        outside: true
    }
    });
</script>
{/literal}

*}

{include file="footer.tpl"}