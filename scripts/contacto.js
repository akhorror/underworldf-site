$(document).ready(function(){
	var locked=false;
	var $sendButton=$(".send-button")
		,$sendIcon=$(".send-icon")
		,$sentIcon=$(".sent-icon")
		,$sentBg=$(".sent-bg")
		,$indicatorDots=$(".send-button,.send-indicator-dot")
	$sendButton.click(function(event) {
		event.preventDefault();
		send();
	});

	function setFilter(filter){
		$(".send").css({
			webkitFilter:filter,
			mozFilter:filter,
			filter:filter,
		});
	}
	function setGoo(){
		setFilter("url(#goo)");
	}
	function setGooNoComp(){
		setFilter("url(#goo-no-comp)");
	}

	function send(){
		if(locked) return;


		var txt_nombre = $("#txt_nombre").val().trim();
		var txt_nick = $("#txt_nick").val().trim();
		var txt_email = $("#txt_email").val().trim();
		var txt_web = $("#txt_web").val().trim();
		var txt_mensaje = $("#txt_mensaje").val().trim();


		if(txt_nombre == "")
		{
			alert("Ingresa tu Nombre");
		}
		else if(txt_email == "")
		{
			alert("Ingresa tu Email");
		}
		else if(txt_mensaje == "")
		{
			alert("Escribenos algo!");
		}
		else
		{

			locked=true;

			$.post( "/contacto", $( "#testform" ).serialize() )
			.done(function( data ) {
				//alert( "Data Loaded: " + data );

				$("#txt_nombre").val("");
				$("#txt_nick").val("");
				$("#txt_email").val("");
				$("#txt_web").val("");
				$("#txt_mensaje").val("");

				TweenMax.to($sendIcon,0.3,{
					x:100,
					y:-100,
					ease:Quad.easeIn,
					onComplete:function(){
						setGooNoComp();
						$sendIcon.css({
							display:"none"
						});
					}
				});
				TweenMax.to($sendButton,0.6,{
					scale:0.5,
					ease:Back.easeOut
				});

				$indicatorDots.each(function(i){
					startCircleAnim($(this),50,0.1,1+(i*0.2),1.1+(i*0.3));
				})


				// START GO
				setTimeout(function(){
					// success anim start
					// close circle
					$indicatorDots.each(function(i){
						stopCircleAnim($(this),0.8+(i*0.1));
					});
					TweenMax.to($sentBg,0.7,{
						delay:.7,
						opacity:1
					})

					// show icon
					setTimeout(function(){
						setGoo();

						TweenMax.fromTo($sentIcon,1.5,{
							display:"inline-block",
							opacity:0,
							scale:0.1
						},{
							scale:1,
							ease:Elastic.easeOut
						});
						TweenMax.to($sentIcon,0.5,{
							delay:0,
							opacity:1
						});
						TweenMax.to($sendButton,0.3,{
							scale:1,
							ease:Back.easeOut
						});

						// back to normal
						setTimeout(function(){
							TweenMax.to($sentBg,0.4,{
								opacity:0
							});
							TweenMax.to($sentIcon,0.2,{
								opacity:0,
								onComplete:function(){
									locked=false;
									$sentIcon.css({
										display:"none"
									})
									TweenMax.fromTo($sendIcon,0.2,{
										display:"inline-block",
										opacity:0,
										x:0,
										y:0
									},{
										opacity:1
									});
								}
							});
						},2000);

					},1000);

				},3000+(Math.random()*3000));
				// END GO

			}); // end jquery post

		}// end validationsu
	}
	function setupCircle($obj){
		if(typeof($obj.data("circle"))=="undefined"){
			$obj.data("circle",{radius:0,angle:0});

			function updateCirclePos(){
				var circle=$obj.data("circle");
				TweenMax.set($obj,{
					x:Math.cos(circle.angle)*circle.radius,
					y:Math.sin(circle.angle)*circle.radius,
				})
				requestAnimationFrame(updateCirclePos);
			}
			updateCirclePos();
		}
	}

	function startCircleAnim($obj,radius,delay,startDuration,loopDuration){
		setupCircle($obj);
		$obj.data("circle").radius=0;
		$obj.data("circle").angle=0;
		TweenMax.to($obj.data("circle"),startDuration,{
			delay:delay,
			radius:radius,
			ease:Quad.easeInOut
		});
		TweenMax.to($obj.data("circle"),loopDuration,{
			delay:delay,
			angle:Math.PI*2,
			ease:Linear.easeNone,
			repeat:-1
		});
	}
	function stopCircleAnim($obj,duration){
		TweenMax.to($obj.data("circle"),duration,{
			radius:0,
			ease:Quad.easeInOut,
			onComplete:function(){
				TweenMax.killTweensOf($obj.data("circle"));
			}
		});
	}
})