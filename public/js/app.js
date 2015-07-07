(function(){
    'use strict';

    angular.module('app', []);

    function MainController($http)
    {
        var vm = this;

        activate();

        function activate()
        {
            $http.get('/api/v1/blogs').then(
                function(data)
                {
                    console.log(data);

                    vm.blogs = data.data;
                }
            );
        }
    }

    angular.module('app')
        .controller('MainController', MainController)

})();