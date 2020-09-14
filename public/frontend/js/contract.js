var owl = $('.carousel-testimony');

$(document).ready(function(){
       owl.trigger('play.owl.autoplay',[2000])
    owl.hover(
        function(){
            $(this).trigger('stop.owl.autoplay')
        },
        function(){
            $(this).trigger('play.owl.autoplay',[2000])
        },
    );
})


// orgchart
var chart = new OrgChart(document.getElementById("tree"), {
    mouseScrool:false,
    toolbar: {
        zoom: true,
        fit: true,
    },
    nodeBinding: {
        field_0: "name",
    },
    nodes: [
        { id: 1, name: "Amber McKenzie" },
        { id: 2, pid: 1, name: "Ava Field" },
        { id: 3, pid: 1, name: "Peter Stevens" }
    ]
});