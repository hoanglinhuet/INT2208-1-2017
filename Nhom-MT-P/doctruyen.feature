Feature: Đọc truyện
	As a người đọc
	I want to đọc truyện
	
	Scenario: Đọc truyện trên trang chủ
		Given Tôi đang ở trang chủ
	  	When Tôi click vào truyện "A"
	  	Then Tôi sẽ thấy thông tin đầy đủ của truyện
	  	When Tôi click "Đọc truyện"
	  	Then Tôi sẽ nhìn thấy nội dung chương 1

	Scenario: Đọc truyện trên trang chủ
		Given Tôi đang ở trang chủ
	  	When Tôi click vào truyện "A"
	  	Then Tôi sẽ thấy thông tin đầy đủ của truyện
	  	When Tôi click "Chương 2"
	  	Then Tôi sẽ nhìn thấy nội dung chương 2

	Scenario: Đọc truyện theo thể loại
		Given Tôi đang ở trang chủ
		When Tôi click vào "Truyện cười"
		Then Tôi sẽ thấy danh sách các truyện "Truyện cười"

	Scenario: Đọc truyện yêu thích
		Given Tôi đang ở trang chủ
		When Tôi click vào "Truyện yêu thích"
		Then Tôi sẽ thấy danh sách các truyện tôi đã đánh dấu yêu thích

	Scenario: Chuyển chương
		Given Tôi đang ở "Chương 1"
		When Tôi click "Tiếp"
		Then Tôi sẽ thấy "Chương 2"

	Scenario: Chuyển chương
		Given Tôi đang ở "Chương 2"
		When Tôi click "Trước"
		Then Tôi sẽ thấy "Chương 1"




