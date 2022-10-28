(function($) {
  (function() {

    var db = {

        loadData: function(filter) {
            return $.grep(this.clients, function(client) {
                return (!filter.Name || client.Name.indexOf(filter.Name) > -1)
                    && (filter.Age === undefined || client.Age === filter.Age)
                    && (!filter.Address || client.Address.indexOf(filter.Address) > -1)
                    && (!filter.Country || client.Country === filter.Country)
                    && (filter.Married === undefined || client.Married === filter.Married);
            });
        },

        insertItem: function(insertingClient) {
            this.clients.push(insertingClient);
        },

        updateItem: function(updatingClient) { },

        deleteItem: function(deletingClient) {
            var clientIndex = $.inArray(deletingClient, this.clients);
            this.clients.splice(clientIndex, 1);
        }

    };

    window.db = db;


    db.countries = [
        { Name: "", Id: 0 },
        { Name: "Primaria", Id: 1 },
        { Name: "Secundaria", Id: 2 },
        { Name: "Universidad", Id: 3 },

    ];

    db.clients = [
        {
            "Name": "Brandon Ampérez",
            "Age": 19,
            "Country": 3,
            "Address": "8va calle",
            "Married": false
        },
        {
            "Name": "Carlos Gonzales",
            "Age": 19,
            "Country": 3,
            "Address": "8va calle",
            "Married": false
        },
        {
            "Name": "Yulmi",
            "Age": 19,
            "Country": 3,
            "Address": "8va calle",
            "Married": false
        },
        {
            "Name": "Luis Mayorga",
            "Age": 19,
            "Country": 3,
            "Address": "8va calle",
            "Married": false
        },
        {
            "Name": "ElInnombrable",
            "Age": 19,
            "Country": 1,
            "Address": "TuAno",
            "Married": true
        },
        {
            "Name": "Ezra Miller",
            "Age": 51,
            "Country": 1,
            "Address": "8va calle",
            "Married": true
        }
    
     ];

}());
})(jQuery);
