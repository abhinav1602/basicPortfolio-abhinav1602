$(document).ready(function(){

	$(".button-collapse").sideNav(),
	$("#righttb").hide(),
	$("#result").hide(),
	$("#resume").hide(),
	$("#project").hide(),
	$("#contact").hide(),

	$("#1").click(function(){
		$("#result").fadeIn(2e3),
		$("#resume").hide(),
		$("#project").hide(),
		$("#contact").hide()}),

	$("#2").click(function(){
		$("#resume").fadeIn(2e3),
		$("#result").hide(),
		$("#project").hide(),
		$("#contact").hide()}),

	$("#3").click(function(){
		$("#project").fadeIn(2e3),
		$("#result").hide(),
		$("#resume").hide(),
		$("#contact").hide()}),

	$(".close").click(function(){
		$("#project").hide(),
		$("#result").hide(),
		$("#resume").hide()}),

	$("#pro").click(function(){
		$("#project").fadeIn(2e3),
		$("#contact").hide()}),

	$("#pro2").click(function(){
		$("#project").fadeIn(2e3),
		$("#contact").hide()}),

	$(".contact_me").click(function(){
		$("#righttb").hide(),
		$("#result").hide(),
		$("#educationC").hide(),
		$("#resumeC").hide(),
		$("#projectsC").hide(),
		$("#resume").hide(),
		$("#project").hide(),
		$("#contact").hide(),
		$("#contact").fadeIn(2e3)
	})
})
