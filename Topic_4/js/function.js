function TodoList(time, content){
	var list = this;
	list.time = observable(time);
	list.content = observable(content);
}
function TodoListViewModel(){
	var list = this;
	list.work = [
		{time: "10h", content:"Go out with xxx"},
		{time: "10h", content:"Go out with xxx"},
		{time: "10h", content:"Go out with xxx"}
	];
}
ko.applyBindings (new TodoListViewModel(), document.getElementById('listwork'));


var ListOfWork = function(works){
	var self = this;
	self.works = ko.observableArray(works);

	self.addWork = function(){

		self.works.push({

			no : "",
			activity : "",
			date : "",
			from : "",
			to : "",
			status : "",
			notes : ""
		});
	};
	self.getworkslength = function(){
		return self.works().length;
	}
	self.showconsole = function(){
		alert('hehe');
	}
	self.removeWork = function(work){
		self.works.remove(work);
	};
	
};

var viewListOfWork = [
	{ no: "1", activity: "Stydying English", date: "1/1/2014", from: "8", to: "10", status: "To-do", notes: "xxx"},
	{ no: "2", activity: "Chat", date: "1/2/2014", from: "8", to: "10", status: "Doing", notes: "ccc"},
	{ no: "3", activity: "Coding", date: "1/3/2014", from: "8", to: "10", status: "Finish", notes: "ddd"}
];
ko.applyBindings(new ListOfWork(viewListOfWork), document.getElementById("work"));

var viewSearchModel ={
	query : ko.observable('')
};
viewSearchModel.viewListOfWork = ko.computed(function(){
	var search = this.query().toLowerCase();
	return ko.utils.arrayFilter(viewListOfWork, function(work){
		return (work.activity.toLowerCase().indexOf(search)>=0 || work.date.toLowerCase().indexOf(search)>=0 || work.status.toLowerCase().indexOf(search)>=0);
	});
}, viewSearchModel);
ko.applyBindings(viewSearchModel, document.getElementById("keyword"));
// $("form").validate({ submitHandler: viewListOfWork.save});