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
    <show-svg></show-svg>

    <label for="">
      text:
    <input type="text" ng-model="svg.content" />
    </label>
    <label for="">
      font length:
    <input type="text" ng-model="svg.length" />
    </label>
    <label for="">
      font size:
    <input type="text" ng-model="svg.fontSize" />
    </label>
    <label for="">
      svg width:
    <input type="text" ng-model="svg.size.width" />
    </label>
    <label for="">
      svg height:
    <input type="text" ng-model="svg.size.height" />
    </label>
    <label for="">
      transform:
    <input type="text" ng-model="svg.transform" />
    </label>
    <label for="">
      rotate:
    <input type="text" ng-model="svg.rotate" />
    </label>
    <label for="">
        X:
    <input type="text" ng-model="svg.position.x" />
    </label>
    <label for="">
        Y:
    <input type="text" ng-model="svg.position.y" />
    </label>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular.min.js" svg></script>
    <script>
        var app = angular.module('svg', []);
        app.controller('svgCtrl', ['$scope', function($scope) {
            $scope.svg = {
                content : 'SVG is Fun',
                length : '220',
                color : '#006600',
                fontSize : '20',
                size : {
                    'width': 220,
                    'height': 20
                },
                position : {
                    'x': 0,
                    'y': 20
                },
                transform : "rotate(0)",
                rotate : "0"
            };
            //   $scope.rotate = "20,0,5,30,10,50,5,10,65,5";
        }])
        .directive('showSvg', ['$rootScope', '$compile', function($rootScope, $compile) {
            return {
                restrict: 'E',
                replace: true,
                controller: 'svgCtrl',
                scope: true,
                scope: {
                    svg: '='
                },
                templateUrl: 'svg.html'
            };
        }]);
    </script>
</body>

</html>
