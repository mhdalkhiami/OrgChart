<?php include 'include/config.php'; ?>
<?php include 'headDashboard.php'; ?>
<?php include 'navHeaderDashboard.php'; ?>

<body onload="blockFirstDelButton()">

	<!-- container-fluid -->
	<div class="col-md-12" >

		<div class="">

			<div class="card card-transparent" style="">
				<div class="card-header d-flex justify-content-left">
					<div class="card-title">
						<h5>
							Organization Chart
						</h5>
					</div>
				</div>

				<!-- <div id="orgChartContainer" class="table-responsive">
					<div id="orgChart"></div>
				</div> -->

				<div id="orgChartContainer" class="table-responsive">
					<div id="orgChart" class="orgChart">
						<table cellpadding="0" cellspacing="0" border="0">
							<tbody>
								<tr>
									<td colspan="12">
										<a href="#" data-toggle="modal" data-target="#editProfile">
										<div class="node" node-id="1">
											
											<div class="col-md-12" align="center">
											<img class="icon1" src="images/ninjaAvatar.png">
										</div>
											<h2>John Lee</h2>
											<h3>CEO</h3>
											<div class="org-add-button">
												<i class="fa fa-plus-circle"></i>
											</div>
											<div class="org-del-button" style="display: none;">
												<i class="fa fa-minus-circle"></i>
											</div>
										</div>
										</a>
									</td>
								</tr>
								<tr class="lines">
									<td colspan="12">
										<table cellpadding="0" cellspacing="0" border="0">
											<tbody>
												<tr class="lines x">
													<td class="line left half"></td>
													<td class="line right half"></td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr class="lines v">
									<td class="line left"></td>
									<td class="line right top"></td>
									<td class="line left top"></td>
									<td class="line right top"></td>
									<td class="line left top"></td>
									<td class="line right top"></td>
									<td class="line left top"></td>
									<!-- <td class="line right top"></td> -->
									<!-- <td class="line left top"></td> -->
									<!-- <td class="line right top"></td> -->
									<!-- <td class="line left top"></td> -->
									<td class="line right"></td>
								</tr>
								<tr>
									<td colspan="2">
										<table cellpadding="0" cellspacing="0" border="0"><tbody>
											<tr>
												<td colspan="2">
													<div class="node" node-id="2">
														<div class="col-md-12" align="center">
														<img class="icon1" src="images/hackerAvatar.png">
													</div>
														<h2>Steven Chan</h2>
														<h3>COO</h3>
														<div class="org-add-button">
															<i class="fa fa-plus-circle"></i>
														</div>
														<div class="org-del-button">
															<i class="fa fa-minus-circle"></i>
														</div>
													</div>
												</td>
											</tr>
																					<tr class="lines">
											<td colspan="2">
												<table cellpadding="0" cellspacing="0" border="0">
													<tbody>
														<tr class="lines x">
															<td class="line left half"></td>
															<td class="line right half"></td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr class="lines v">
											<td class="line left half"></td>
											<td class="line right half"></td>
										</tr>
										<tr>
											<td colspan="2">
												<div class="node" node-id="8">
													<div class="col-md-12" align="center">
														<img class="icon1" src="images/spiderAvatar.png">
													</div>
													<h2>CK Low</h2>
													<h3>Assitance CTO</h3>
													<div class="org-add-button">
														<i class="fa fa-plus-circle"></i>
													</div>
													<div class="org-del-button">
														<i class="fa fa-minus-circle"></i>
													</div>
												</div>
											</td>
										</tr>
										</tbody>
									</table>
								</td>
								<td colspan="2">
									<table cellpadding="0" cellspacing="0" border="0"><tbody>
										<tr>
											<td colspan="2">
												<div class="node" node-id="3">
													<div class="col-md-12" align="center">
														<img class="icon1" src="images/ghostAvatar.png">
													</div>
													<h2>Jelly Hiew</h2>
													<h3>CMO</h3>
													<div class="org-add-button">
														<i class="fa fa-plus-circle"></i>
													</div>
													<div class="org-del-button">
														<i class="fa fa-minus-circle"></i>
													</div>
												</div>
											</td>
										</tr>
																				<tr class="lines">
											<td colspan="2">
												<table cellpadding="0" cellspacing="0" border="0">
													<tbody>
														<tr class="lines x">
															<td class="line left half"></td>
															<td class="line right half"></td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr class="lines v">
											<td class="line left half"></td>
											<td class="line right half"></td>
										</tr>
										<tr>
											<td colspan="2">
												<div class="node" node-id="8">
													<div class="col-md-12" align="center">
														<img class="icon1" src="images/ninjaAvatar.png">
													</div>
													<h2>Aimy Cheah</h2>
													<h3>Assitance CMO</h3>
													<div class="org-add-button">
														<i class="fa fa-plus-circle"></i>
													</div>
													<div class="org-del-button">
														<i class="fa fa-minus-circle"></i>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
							
							
							<td colspan="2">
								<table cellpadding="0" cellspacing="0" border="0">
									<tbody>
										<tr>
											<td colspan="2">
												<div class="node" node-id="7">
													<div class="col-md-12" align="center">
														<img class="icon1" src="images/robotAvatar.png">
													</div>
													<h2>William Tan</h2>
													<h3>CTO</h3>
													<div class="org-add-button">
														<i class="fa fa-plus-circle"></i>
													</div>
													<div class="org-del-button">
														<i class="fa fa-minus-circle"></i>
													</div>
												</div>
											</td>
										</tr>
										<tr class="lines">
											<td colspan="2">
												<table cellpadding="0" cellspacing="0" border="0">
													<tbody>
														<tr class="lines x">
															<td class="line left half"></td>
															<td class="line right half"></td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr class="lines v">
											<td class="line left half"></td>
											<td class="line right half"></td>
										</tr>
										<tr>
											<td colspan="2">
												<div class="node" node-id="8">
													<div class="col-md-12" align="center">
														<img class="icon1" src="images/vampireAvatar.png">
													</div>
													<h2>CK Low</h2>
													<h3>Assitance CTO</h3>
													<div class="org-add-button">
														<i class="fa fa-plus-circle"></i>
													</div>
													<div class="org-del-button">
														<i class="fa fa-minus-circle"></i>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
							<td colspan="2">
								<table cellpadding="0" cellspacing="0" border="0">
									<tbody>
										<tr>
											<td colspan="2">
												<div class="node" node-id="8">
													<div class="col-md-12" align="center">
														<img class="icon1" src="images/spiderAvatar.png">
													</div>
													<h2>Sally Lee</h2>
													<h3>Assitance Manager</h3>
													<div class="org-add-button">
														<i class="fa fa-plus-circle"></i>
													</div>
													<div class="org-del-button">
														<i class="fa fa-minus-circle"></i>
													</div>
												</div>
											</td>
										</tr>
										<tr class="lines">
											<td colspan="2">
												<table cellpadding="0" cellspacing="0" border="0">
													<tbody>
														<tr class="lines x">
															<td class="line left half"></td>
															<td class="line right half"></td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr class="lines v">
											<td class="line left half"></td>
											<td class="line right half"></td>
										</tr>
										<tr>
											<td colspan="2">
												<div class="node" node-id="8">
													<div class="col-md-12" align="center">
														<img class="icon1" src="images/warriorAvatar.png">
													</div>
													<h2>Johnny Chia</h2>
													<h3>Assitance Supervisor</h3>
													<div class="org-add-button">
														<i class="fa fa-plus-circle"></i>
													</div>
													<div class="org-del-button">
														<i class="fa fa-minus-circle"></i>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</td>

						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

</div>

<div class="modal fade stick-up " id="editProfile" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content-wrapper">
        <div class="modal-content">
          <div class="modal-header clearfix text-left">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="pg-close fs-18"></i>
            </button>
            <h5>
              Edit Profile
            </h5>
          </div>
          <div class="modal-body text-center row">
            <div class="col-md-6 imageBox" align="center">
              <img class="icon2" src="images/ninjaAvatar.png">
              <div class="col-md-12" align="center">
               <button type="button" class="btn btn-default placeImage">
              Change Image
            </button>
          </div>
            </div>
            <div class="col-md-6" style="margin:20px 0px">
              <div class="col-md-12">
            <input class="input-sm form-control" type="text" disabled="" value="John Lee">
          </div>
          <div class="col-md-12 mt-3">
            <input class="input-sm form-control" type="text" disabled="" value="JohnLee@gmail.com">
          </div>
          <div class="col-md-12 mt-3">
            <input class="input-sm form-control" type="text" placeholder="Mobile Number">
          </div>
           <div class="col-md-12 mt-3">
            <input class="input-sm form-control" type="text" placeholder="Company Name">
          </div>
          <div class="col-md-12 mt-3">
            <input class="input-sm form-control" type="text" placeholder="Company ID">
          </div>
          <button type="button" class="btn btn-success placeImage" onclick="window.location.href='organizationChart.php'">
              Save Changes
            </button>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php include 'footerDashboard.php'; ?>
<?php include 'sharejsDashboard.php'; ?>

<script>
	(function($) {
		$.fn.orgChart = function(options) {
			var opts = $.extend({}, $.fn.orgChart.defaults, options);
			return new OrgChart($(this), opts);        
		}

		$.fn.orgChart.defaults = {
			data: [{id:1, name:'Root', title:'Amount', parent: 0, hierarchy: 0}],
			showControls: false,
			allowEdit: false,
			onAddNode: null,
			onDeleteNode: null,
			onClickNode: null,
			newNodeText: '<i class="fa fa-plus-circle"></i>',
			delNodeText: '<i class="fa fa-minus-circle"></i>'
		};

		function OrgChart($container, opts){
			// var data = opts.data;
			var nodes = {};
			var rootNodes = [];
			this.opts = opts;
			this.$container = $container;
			var self = this;

			this.draw = function(){
				$container.empty().append(rootNodes[0].render(opts));
				document.getElementsByClassName('org-del-button')[0].style.display = 'none';
				$container.find('.node').click(function(){
					if(self.opts.onClickNode !== null){
						self.opts.onClickNode(nodes[$(this).attr('node-id')]);
					}
				});

				if(opts.allowEdit){
					$container.find('.node h2').click(function(e){
						var thisId = $(this).parent().attr('node-id');
						self.startEdit(thisId);
						e.stopPropagation();
					});
					$container.find('.node h3').click(function(e){
						var thisId = $(this).parent().attr('node-id');
						self.startEdith3(thisId);
						e.stopPropagation();
					});
				}

            // add "add button" listener
            $container.find('.org-add-button').click(function(e){
            	var thisId = $(this).parent().attr('node-id');

            	if(self.opts.onAddNode !== null){
            		self.opts.onAddNode(nodes[thisId]);
            	}
            	else{
            		self.newNode(thisId);
            	}
            	e.stopPropagation();
            });

            $container.find('.org-del-button').click(function(e){
            	var thisId = $(this).parent().attr('node-id');

            	if(self.opts.onDeleteNode !== null){
            		self.opts.onDeleteNode(nodes[thisId]);
            	}
            	else{
            		self.deleteNode(thisId);
            	}
            	e.stopPropagation();
            });
        }

        this.startEdit = function(id){
        	var inputElement = $('<input class="form-control" type="text" value="'+nodes[id].data.name+'"/>');
        	$container.find('div[node-id='+id+'] h2').replaceWith(inputElement);
        	var commitChange = function(){
        		var h2Element = $('<h2>'+nodes[id].data.name+'</h2>');
        		if(opts.allowEdit){
        			h2Element.click(function(){
        				self.startEdit(id);
        			})
        		}
        		inputElement.replaceWith(h2Element);
        	}  
        	inputElement.focus();
        	inputElement.keyup(function(event){
        		if(event.which == 13){
        			commitChange();
        		}
        		else{
        			nodes[id].data.name = inputElement.val();
        		}
        	});
        	inputElement.blur(function(event){
        		commitChange();
        	})
        }

        //////////////////////title field//////////////////////////////
        this.startEdith3 = function(id){
        	var inputElement = $('<input class="form-control" type="text" value="'+nodes[id].data.title+'"/>');
        	$container.find('div[node-id='+id+'] h3').replaceWith(inputElement);
        	var commitChange = function(){
        		var h3Element = $('<h3>'+nodes[id].data.title+'</h3>');
        		if(opts.allowEdit){
        			h3Element.click(function(){
        				self.startEdith3(id);
        			})
        		}
        		inputElement.replaceWith(h3Element);
        	}  
        	inputElement.focus();
        	inputElement.keyup(function(event){
        		if(event.which == 13){
        			commitChange();
        		}
        		else{
        			nodes[id].data.title = inputElement.val();
        		}
        	});
        	inputElement.blur(function(event){
        		commitChange();
        	})
        }
        //////////////////////title field ends////////////////////////
        this.newNode = function(parentId){
        	var nextId = Object.keys(nodes).length;
        	while(nextId in nodes){
        		nextId++;
        	}

        	self.addNode({id: nextId, name: 'Name', title:'Position', hierarchy: parentId, parent: parentId});
        }

        this.addNode = function(data){
        	var newNode = new Node(data);
        	nodes[data.id] = newNode;
        	nodes[data.parent].addChild(newNode);
        	self.draw();
        	self.startEdit(data.id);
        	self.startEdith3(data.id);
        }

        this.deleteNode = function(id){
        	for(var i=0;i<nodes[id].children.length;i++){
        		self.deleteNode(nodes[id].children[i].data.id);
        	}
        	nodes[nodes[id].data.parent].removeChild(id);
        	delete nodes[id];
        	self.draw();
        }

        this.getData = function(){
        	var outData = [];
        	for(var i in nodes){
        		outData.push(nodes[i].data);
        	}
        	return outData;
        }

        // constructor
        for(var i in data){
        	var node = new Node(data[i]);
        	nodes[data[i].id] = node;
        }

        // generate parent child tree
        for(var i in nodes){
        	if(nodes[i].data.parent == 0){
        		rootNodes.push(nodes[i]);
        	}
        	else{
        		nodes[nodes[i].data.parent].addChild(nodes[i]);
        	}
        }

        // draw org chart
        $container.addClass('orgChart');
        self.draw();
    }

    function Node(data){
    	this.data = data;
    	this.children = [];
    	var self = this;

    	this.addChild = function(childNode){
    		this.children.push(childNode);
    	}

    	this.removeChild = function(id){
    		for(var i=0;i<self.children.length;i++){
    			if(self.children[i].data.id == id){
    				self.children.splice(i,1);
    				return;
    			}
    		}
    	}

    	this.render = function(opts){
    		var childLength = self.children.length,
    		mainTable;

    		mainTable = "<table cellpadding='0' cellspacing='0' border='0'>";
    		var nodeColspan = childLength>0?2*childLength:2;
    		mainTable += "<tr><td colspan='"+nodeColspan+"'>"+self.formatNode(opts)+"</td></tr>";

    		if(childLength > 0){
    			var downLineTable = "<table cellpadding='0' cellspacing='0' border='0'><tr class='lines x'><td class='line left half'></td><td class='line right half'></td></table>";
    			mainTable += "<tr class='lines'><td colspan='"+childLength*2+"'>"+downLineTable+'</td></tr>';

    			var linesCols = '';
    			for(var i=0;i<childLength;i++){
    				if(childLength==1){
                        linesCols += "<td class='line left half'></td>";    // keep vertical lines aligned if there's only 1 child
                    }
                    else if(i==0){
                        linesCols += "<td class='line left'></td>";     // the first cell doesn't have a line in the top
                    }
                    else{
                    	linesCols += "<td class='line left top'></td>";
                    }

                    if(childLength==1){
                    	linesCols += "<td class='line right half'></td>";
                    }
                    else if(i==childLength-1){
                    	linesCols += "<td class='line right'></td>";
                    }
                    else{
                    	linesCols += "<td class='line right top'></td>";
                    }
                }
                mainTable += "<tr class='lines v'>"+linesCols+"</tr>";

                mainTable += "<tr>";
                for(var i in self.children){
                	mainTable += "<td colspan='2'>"+self.children[i].render(opts)+"</td>";
                }
                mainTable += "</tr>";
            }
            mainTable += '</table>';
            return mainTable;
        }

        this.formatNode = function(opts){
        	var nameString = '',
        	descString = '';
        	titleString = '';
        	if(typeof data.name !== 'undefined'){
        		nameString = '<h2>'+self.data.name+'</h2>';
        	}
        	if(typeof data.title !== 'undefined'){
        		titleString = '<h3>'+self.data.title+'</h3>';
        	}
        	if(typeof data.description !== 'undefined'){
        		descString = '<p>'+self.data.description+'</p>';
        	}
        	if(opts.showControls){
        		var buttonsHtml = "<div class='org-add-button'>"+opts.newNodeText+"</div><div class='org-del-button'>"+opts.delNodeText+"</div>";
        	}
        	else{
        		buttonsHtml = '';
        	}
        	return "<div class='node' node-id='"+this.data.id+"'>"+nameString+titleString+descString+buttonsHtml+"</div>";
        }
    }

})(jQuery);

///////////////////////////////////////
var testData = [
{id: 1, name: 'Name', title: 'Position', parent: 0},
{id: 2, name: 'Name', title: 'Position', parent: 1},
{id: 3, name: 'Name', title: 'Position', parent: 1},
{id: 4, name: 'Name', title: 'Position', parent: 1},
{id: 6, name: 'Name', title: 'Position', parent: 1},
{id: 7, name: 'Name', title: 'Position', parent: 1},
{id: 8, name: 'Name', title: 'Position', parent: 1},
{id: 5, name: 'Name', title: 'Position', parent: 3},

];
$(function(){
	org_chart = $('#orgChart').orgChart({
		data: testData,
		showControls: true,
		allowEdit: true,
		onAddNode: function(node){ 
			log('Created new node on node '+node.data.id);
			org_chart.newNode(node.data.id); 
		},
		onDeleteNode: function(node){
			log('Deleted node '+node.data.id);
			org_chart.deleteNode(node.data.id); 
		},
		onClickNode: function(node){
			log('Clicked node '+node.data.id);
		}

	});
});

    // just for example purpose
    function log(text){
    	$('#consoleOutput').append('<p>'+text+'</p>')
    }

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>


</body>
</html>
