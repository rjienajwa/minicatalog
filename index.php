<? include __DIR__ . "/header.php";// 11:00--11:35 19:20--22:53 ?>
<article ng-controller="contentController" layout="row">
	<md-content class="md-padding" layout-xs="column" layout="row" style="background: #ddd">
		<div flex-xs flex-gt-xs="50" layout="column" style="width: 50%; margin: auto;">
			<md-card>
				<md-card-title>
					<md-card-title-media>
						<img ng-src="I.jpg" class="md-card-image" style="height: 130px" />
					</md-card-title-media>
					<md-card-title-text>
						<div class="md-headline">Лэндинг</div>
						<div class="md-subhead">Material Design</div>
					</md-card-title-text>
				</md-card-title>
				<md-card-content>
					<p>Простой и понятный лэндинг. Построенн на Angular и Material,
						благоданя чему очень легко настраивается и правится.</p>
					{{user}}
				</md-card-content>
				<md-card-actions layout="row" layout-align="end center">
					<md-button class="md-warn">Подробнее</md-button>
					<md-button class="md-warn" ng-click="add($event, 'Лэндинг')">Выбрать</md-button>
				</md-card-actions>
			</md-card>
		</div>
	</md-content>
</article>
<script>
	app.controller('contentController', function($scope, $mdDialog) {
		$scope.contents = ["a", "b"];
		$scope.add = function($event, name) {
			var parentEl = angular.element(document.body);
			$mdDialog.show({
				parent: parentEl,
				targetEvent: $event,
				template:
					`<form
						name='calbackForm'
                		ng-show="form.success === undefined"
                  		novalidate
                	>
						<md-dialog aria-label="List dialog">
							<md-dialog-content>
								<h2>Оформление заказа ${name}</h2>
								<md-input-container>
									<label><md-icon ng-bind="'person'"></md-icon> Как вас завут?</label>
									<input 
										ng-model="user.name"
										required='required'
										ng-minlength="3"
									>
								</md-input-container>
								<md-input-container>
									<label><md-icon ng-bind="'call'"></md-icon> Как с вами связаться?</label>
									<input 
										ng-model="user.tel"
										required='required'
										ng-minlength="7"
										type="tel"
										mask="(999) 999-99-99"
									>
								</md-input-container>
					 		</md-dialog-content>
				 	 		<md-dialog-actions>
				 	 			<md-button>Заказать звонок</md-button>
				 	 			<md-button ng-click="closeDialog()">Отмена</md-button>
					 		</md-dialog-actions>
						</md-dialog>
					</form>
					`,
				locals: {
					items: $scope.items
				},
				controller: DialogController
			}).then(function(value) {
				console.log(value);
			}, function() {});
		};
		function DialogController($scope, $mdDialog, items) {
			$scope.user = {};
			$scope.closeDialog = function() {
				$mdDialog.hide();
			}
		}
	});
</script>
<? include __DIR__ . "/footer.php"; ?>
</body>
</html>