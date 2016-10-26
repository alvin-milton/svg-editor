<!DOCTYPE html>
<html ng-app="svg">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>SVG Editor</title>
    <style>
        body {
            background-color: #fff;
            font-size: 1em;
            font-family: monospace;
        }

        svg {
            border: 1px solid #ddd;
            /* margin: 10px; */
            /* padding: 10px; */
            /* background-color: #eee; */
        }

        input,
        label {
            display: block;
            font-size: 14px;
            padding: 10px;
        }

        input {
            margin: 10px;
        }

        label {
            color: #666;
            padding: 10px 0;
        }
    </style>
</head>

<body ng-controller="svgCtrl">
    <svg width="{{size.width}}" height="{{size.height}}" ng-model="size">
      <text rotate="{{rotate}}" transform="{{transform}}" x="{{position.x}}" y="{{position.y}}" textLength="{{length}}" fill="{{color}}" font-size="{{fontSize}}" font-family="'Raleway', sans-serif" show-svg></text>
    </svg>
    <label for="">
      text:
    <input type="text" ng-model="content" />
    </label>
    <label for="">
      font length:
    <input type="text" ng-model="length" />
    </label>
    <label for="">
      font size:
    <input type="text" ng-model="fontSize" />
    </label>
    <label for="">
      svg width:
    <input type="text" ng-model="size.width" />
    </label>
    <label for="">
      svg height:
    <input type="text" ng-model="size.height" />
    </label>
    <label for="">
      transform:
    <input type="text" ng-model="transform" />
    </label>
    <label for="">
      rotate:
    <input type="text" ng-model="rotate" />
    </label>
    <label for="">
        X:
    <input type="text" ng-model="position.x" />
    </label>
    <label for="">
        Y:
    <input type="text" ng-model="position.y" />
    </label>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular.min.js" svg></script>
    <script>
        var app = angular.module('svg', []);

        app.controller('svgCtrl', ['$scope', function($scope) {
            $scope.content = 'SVG is Fun';
            $scope.length = '220';
            $scope.color = '#006600';
            $scope.fontSize = '20';
            $scope.size = {
                'width': 220,
                'height': 20
            };
            $scope.position = {
                'x': 0,
                'y': 20
            }
            $scope.transform = "rotate(0)";
            //   $scope.rotate = "20,0,5,30,10,50,5,10,65,5";
            $scope.rotate = "0";
        }])
        .directive('showSvg', function() {
            return {
                template: '{{content}}'
            };
        });
    </script>
</body>

</html>
