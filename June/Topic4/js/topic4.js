

function TodoItem( initItem) {
    var self = this;
    self.activity = ko.observable(initItem.activity);
    self.date = ko.observable(initItem.date);
    self.from = ko.observable(initItem.from);
    self.to = ko.observable(initItem.to);
    self.status = ko.observable(initItem.status);
    self.notes = ko.observable(initItem.notes);
    self.isEditing = ko.observable(false);
    self.isNew = ko.observable(false);
    self.isSearch = ko.observable(false);



    self.itemBackup = function(initItem){
    	self.activity = ko.observable(initItem.activity());
	    self.date = ko.observable(initItem.date());
	    self.from = ko.observable(initItem.from());
	    self.to = ko.observable(initItem.to());
	    self.status = ko.observable(initItem.status());
	    self.notes = ko.observable(initItem.notes());
	    self.isNew = ko.observable(false);
    };
     
    //Trang thai edit/new phai theo tung TodoItem
}

// Overall viewmodel for this screen, along with initial state
var TodoViewModel = function() {
    var self = this;    
    self.isSearch = ko.observable(false); 
    self.keyWord = ko.observable('');
    self.viewModel = ko.observable();  

    // Non-editable catalog data - would come from the server
    self.Items = [
{ activity : "Chạy bộ", date: "18-07-2014", from: 6, to:7, status: "ToDo", notes: "note" },
{ activity : "Ăn sáng", date: "18-07-2014", from: 7, to:8, status: "ToDo", notes: "note" },
{ activity : "Làm việc", date: "18-07-2014", from: 8, to:12, status: "ToDo", notes: "note" }
    ];    

    // Editable data
    self.listitems = ko.observableArray([
        new TodoItem( self.Items[0]),
        new TodoItem( self.Items[1]),
        new TodoItem( self.Items[2])
    ]);
    //Em nen de list Todo ben cot trai la mot thuoc tinh cua form nay lun
    //Khi do chi apply binding 1 la cho Knockout
    self.toDayTodoList = ko.observableArray([
    	new TodoItem( self.Items[0]),
        new TodoItem( self.Items[1])
	]);

  	
	self.search = function(){

		if(self.keyWord() != ''){
			self.listitems.removeAll();
			word = self.keyWord().toLowerCase();
			ko.utils.arrayForEach(self.Items, function(item){
				var act = item.activity.toLowerCase();
				var stt = item.status.toLowerCase();
				if(act.indexOf(word) >= 0 || stt.indexOf(word) >= 0){
					self.listitems.push(new TodoItem(item));
				}
			});
		}

	};
 	self.backup = function(TodoItem){
    	return ko.mapping.fromJS(ko.toJS(TodoItem));
    }

    self.removeTodo = function(TodoItem){
    	var conf = confirm("Do you want to delete this task?");
    	if(conf){
    		self.listitems.remove(TodoItem);
    	}

    };

    self.editTodo = function(TodoItem){
    	TodoItem.isEditing(true);
    	self.viewModel(self.backup(TodoItem));
    	 console.log(self.viewModel().activity());
    };

    self.addNewTodo = function(){
    	var now = new Date();
    	var newItem = new TodoItem({
    		activity: "New Todo",
    		date: now.getDate() + "-" + (now.getMonth() + 1) + "-" + now.getFullYear(),
    		from: 0,
    		to: 23,
    		status: "Not yet done",
    		note:"new todo"
    	});
    	newItem.isEditing(true);
    	newItem.isNew(true);
    	self.listitems.push(newItem);

    	//Buttom new hienj tai cua em ko duoc apply Knockout
    	//Vi no nam ngoai element em muon apply
    };

    self.cancelNew = function(TodoItem){
    	self.listitems.remove(TodoItem)
    };

     self.saveTodo = function(TodoItem){
     	//Don gian la tat che do edit
    	TodoItem.isEditing(false);
    };
	
    self.cancelEdit = function(TodoItem){
    	TodoItem.itemBackup(self.viewModel());
    	self.saveTodo(TodoItem);
    	// TodoItem.isEditing(false);
    	 console.log(self.viewModel().activity());

    };


}
ko.applyBindings(new TodoViewModel());
//Em có the apply cho toan bo page ma ko can chi ro element nào nua

/*
function TodoItem(name){
	var self = this;
	self.name = name;
}
function ToDoViewModel(){
	self.todos = ko.observableArray([
			new TodoItem(" An sang"),
			new TodoItem("Di hoc"),
			new TodoItem("Learn KnockOut js"),
		]);
	self.todosCompleted = ko.observableArray([]);
	// add todo
	self.addNewTodo = function(form){
		var todoName = document.getElementById('todoName').value;
		if (todoName) {
			self.todos.push(new TodoItem(todoName));
		}
	}
	self.removeToDo = function(todo){
		self.todos.remove(todo);
	}
	self.completeTodo = function(todo){
		self.todosCompleted.push(todo);
		self.removeToDo(todo);
	}
}
ko.applyBindings(new ToDoViewModel());*/