<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phiếu Khảo Sát</title>
    <!-- Link CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3 class="">BỘ NỘI VỤ</h3>
    <h3 class="mb-4 text-center">PHIẾU KHẢO SÁT</h3>
    <h5 class="text-center">Sự hài lòng của người dân đối với sự phục vụ của cơ quan hành chính nhà nước</h5>

    <div class="text-justify mt-5">
        <h4 class="text-center">GIỚI THIỆU KHẢO SÁT</h4>
        <p>
            Bộ Nội vụ là cơ quan Thường trực cải cách hành chính của Chính phủ, được Chính phủ giao hàng năm triển khai khảo sát đo lường sự hài lòng của người dân
            để hiểu được nhận định, đánh giá, mức độ hài lòng và nhu cầu,
            mong đợi của người dân đối với sự phục vụ của cơ quan hành chính nhà nước. Trên cơ sở đó, Bộ Nội vụ tham mưu
            cho Chính phủ chỉ đạo các cơ quan hành chính nhà nước thực hiện các giải pháp cần thiết để phục vụ người dân ngày càng tốt hơn, đáp ứng được nhu cầu,
            mong đợi của người dân.
        </p>
        <p>
            Bộ Nội vụ kính mong Ông/Bà tham gia trả lời phiếu khảo sát đo lường sự hài lòng của người dân một cách đầy đủ, chính xác, khách quan.
            Các thông tin mà Ông/Bà cung cấp trong phiếu khảo sát sẽ được bảo mật theo quy định.
        </p>
        <p>
            Kết quả đo lường đo lường sự hài lòng của người dân hàng năm sẽ được Bộ Nội vụ tổng hợp, phân tích, xây dựng thành Chỉ số hài lòng
            của người dân đối với sự phục vụ của cơ quan hành chính nhà nước để báo cáo Chính phủ và công bố công khai trong cả nước.
        </p>
    </div>
    <form class="mt-5">

        <div class="mb-3">
            <h4 class="text-center">PHẦN A: THÔNG TIN CÁ NHÂN NGƯỜI TRẢ LỜI KHẢO SÁT</h4>

        </div>
        <div class="mb-3">
            <label for="province"><b>Họ và tên:</b></label>
            <input type="text" class="form-control" id="province" name="name" value="{{$customer->name}}" required>
        </div>
        <div class="mb-3">
            <label for="province"><b>Email:</b></label>
            <input type="email" class="form-control" id="province" name="email" value="{{$customer->email}}" required>
        </div>
        <div class="mb-3">
            <label for="province"><b>Số điện thoại:</b></label>
            <input type="text" class="form-control" id="province" name="phone" value="{{$customer->phone}}" required>
        </div>

        <div class="mb-3">
            <label for="province"><b>Tỉnh/Thành phố:</b></label>
            <input type="text" class="form-control" id="province" name="city" value="{{$customer->city}}" required>
        </div>
        <div class="mb-3">
            <label for="province"><b>Huyện/Quận/Thị xã/Thành phố:</b></label>
            <input type="text" class="form-control" id="province" name="district" value="{{$customer->district}}" required>
        </div>
        <div class="mb-3">
            <label for="province"><b>Xã/Phường/Thị trấn:</b></label>
            <input type="text" class="form-control" id="province" name="commune" value="{{$customer->commune}}" required>
        </div>
        <div class="mb-3">
            <label for="province"><b>Thôn, Tổ dân phố:</b></label>
            <input type="text" class="form-control" id="province" name="village" value="{{$customer->village}}" required>
        </div>
        <!-- Các trường khác -->
        <div class="mb-3">
            <label for="gender"><b>Giới tính:</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="1" <?php echo ($customer->gender == "Nam") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="2" <?php echo ($customer->gender == "Nữ") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="female">Nữ</label>
            </div>
        </div>


        <div class="mb-3">
            <label for="age"><b>Độ tuổi:</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="age" id="male" value="1" <?php echo ($customer->age == "18 - 25 tuổi") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">18 - 25 tuổi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="age" id="female" value="2" <?php echo ($customer->age == "25 - 34 tuổi") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="female">25 - 34 tuổi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="age" id="male" value="3" <?php echo ($customer->age == "35 - 49 tuổi") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">35 - 49 tuổi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="age" id="female" value="4" <?php echo ($customer->age == "50 - 60 tuổi") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="female">50 - 60 tuổi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="age" id="male" value="5" <?php echo ($customer->age == "Trên 60 tuổi") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">Trên 60 tuổi</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="ethnicity"><b>Dân tộc:</b></label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ethnicity" id="kinh" value="1" <?php echo ($customer->ethnicity == "Kinh") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="kinh">Kinh</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="ethnicity" id="otherEthnicity" value="2" <?php echo ($customer->ethnicity != "Kinh") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="otherEthnicity">Khác</label>
            </div>
            <input type="text" class="form-control mt-2" id="province" name="other_ethnicity" value="{{$customer->ethnicity}}" >
        </div>

        <div class="mb-3">
            <label for="age"><b>Trình độ học vấn:</b></label><br>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="literacy" id="male" value="1" <?php echo ($customer->literacy == "Tiểu học (Cấp I)") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">Tiểu học (Cấp I)</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="literacy" id="female" value="2" <?php echo ($customer->literacy == "Trung học cơ sở (Cấp II)") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="female">Trung học cơ sở (Cấp II)</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="literacy" id="male" value="3" <?php echo ($customer->literacy == "Trung học phổ thông (Cấp III)") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">Trung học phổ thông (Cấp III)</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="literacy" id="female" value="4" <?php echo ($customer->literacy == "Dạy nghề/ Trung cấp/ Cao đẳng") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="female">Dạy nghề/ Trung cấp/ Cao đẳng</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="literacy" id="male" value="5" <?php echo ($customer->literacy == "Đại học/ trên Đại học") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">Đại học/ trên Đại học</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="literacy" id="male" value="6" <?php echo ($customer->literacy != "Tiểu học (Cấp I)" && $customer->literacy != "Trung học cơ sở (Cấp II)" && $customer->literacy != "Trung học phổ thông (Cấp III)" && $customer->literacy != "Dạy nghề/ Trung cấp/ Cao đẳng" && $customer->literacy != "Đại học/ trên Đại học") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">Khác</label>
                <input type="text" class="form-control mt-2" id="province" name="other_literacy"  value="{{$customer->literacy}}">
            </div>
        </div>

        <div class="mb-3">
            <label for="age"><b>Nghề nghiệp:</b></label><br>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="occupation" id="male" value="1" <?php echo ($customer->occupation == "Nghỉ hưu") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">Nghỉ hưu</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="occupation" id="female" value="2" <?php echo ($customer->occupation == "Không đi làm (ở nhà)") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="female">Không đi làm (ở nhà)</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="occupation" id="male" value="3" <?php echo ($customer->occupation == "Làm công việc tự do (không ký hợp đồng lao động)") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">Làm công việc tự do (không ký hợp đồng lao động))</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="occupation" id="female" value="4" <?php echo ($customer->occupation == "Sinh viên") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="female">Sinh viên</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="occupation" id="male" value="5" <?php echo ($customer->occupation == "Làm việc tại tổ chức, doanh nghiệp trong lĩnh vực tư") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">Làm việc tại tổ chức, doanh nghiệp trong lĩnh vực tư</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="occupation" id="male" value="6" <?php echo ($customer->occupation == "Làm việc tại cơ quan, tổ chức, doanh nghiệp trong lĩnh vực công") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">Làm việc tại cơ quan, tổ chức, doanh nghiệp trong lĩnh vực công</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="occupation" id="male" value="7" <?php echo ($customer->occupation != "Nghỉ hưu" && $customer->occupation != "Không đi làm (ở nhà)" && $customer->occupation != "Làm công việc tự do (không ký hợp đồng lao động)" && $customer->occupation != "Sinh viên" && $customer->occupation != "Làm việc tại tổ chức, doanh nghiệp trong lĩnh vực tư" && $customer->occupation != "Làm việc tại cơ quan, tổ chức, doanh nghiệp trong lĩnh vực công") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="male">Khác</label>
                <input type="text" class="form-control mt-2" id="province" name="other_occupation" value="{{$customer->occupation}}">
            </div>
        </div>

        <div class="mb-3">
            <label><b>Nơi sinh sống:</b></label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="residence_type" id="urban" value="urban" <?php echo ($customer->residence_type == "Đô thị") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="urban">Đô thị</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="residence_type" id="rural" value="rural" <?php echo ($customer->residence_type == "Nông thôn") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="rural">Nông thôn</label>
            </div>
        </div>

        <div class="mb-3" id="specific_residence">
            <label><b>Nơi sinh sống cụ thể:</b></label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="specific_residence" id="urbanMountain" value="urbanMountain" <?php echo ($customer->specific_residence == "Miền núi") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="urbanMountain">Miền núi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="specific_residence" id="urbanPlain" value="urbanPlain" <?php echo ($customer->specific_residence == "Đồng bằng") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="urbanPlain">Đồng bằng</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="specific_residence" id="urbanIsland" value="urbanIsland" <?php echo ($customer->specific_residence == "Hải đảo") ? 'checked' : ''; ?> required>
                <label class="form-check-label" for="urbanIsland">Hải đảo</label>
            </div>
        </div>
        <!-- Thêm các trường radio button khác -->

        <h4 class="text-center">PHẦN B: CÂU HỎI KHẢO SÁT</h4>
        <div>
            <div class="form-check ms-3">
                <span><b>Câu 1. Xin Ông/Bà cho biết mức độ quan tâm của Ông/Bà đối với các chính sách của cơ quan nhà nước trong bảng dưới đây?</b></span>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Nội dung</th>
                        <th class="text-center" scope="col">Không Quan Tâm</th>
                        <th class="text-center" scope="col">Quan Tâm Một Chút</th>
                        <th class="text-center" scope="col">Rất Quan Tâm</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cau_1 as $key => $cau)
                        <tr>
                            <td scope="row">{{ $cacCauHoi1[$key] }}</td>
                            <td class="text-center">
                                <input type="radio" name="question{{ $cau->id }}" {{ $cau->answer == 1 ? 'checked' : '' }} value="khong_quan_tam">
                            </td>
                            <td class="text-center">
                                <input type="radio" name="question{{ $cau->id }}" {{ $cau->answer == 2 ? 'checked' : '' }} value="quan_tam">
                            </td>
                            <td class="text-center">
                                <input type="radio" name="question{{ $cau->id }}" {{ $cau->answer == 3 ? 'checked' : '' }} value="rat_quan_tam">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

            <div class="mb-3">
                <label for="age"> <b>Câu 2. Ông/Bà sử dụng kênh thông tin nào để theo dõi các chính sách nêu ở câu 1?</b></label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question_two" id="answer_{{ $cau_2['answer'] }}" {{ $cau_2['answer'] == 1 ? 'checked' : '' }} value="{{ $cau['answer'] }}">
                        <label class="form-check-label" for="answer_{{ $cau_2['answer'] }}">Qua loa phát thanh xã.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question_two" id="answer_{{ $cau_2['answer'] }}" {{ $cau_2['answer'] == 2 ? 'checked' : '' }} value="{{ $cau['answer'] }}">
                        <label class="form-check-label" for="answer_{{ $cau['answer'] }}">Qua họp, sinh hoạt, thông báo tại khu dân cư.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question_two" id="answer_{{ $cau['answer'] }}" {{ $cau_2['answer'] == 3 ? 'checked' : '' }} value="{{ $cau['answer'] }}">
                        <label class="form-check-label" for="answer_{{ $cau['answer'] }}">Qua cơ quan nhà nước, công chức.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question_two" id="answer_{{ $cau['answer'] }}" {{ $cau_2['answer'] == 4 ? 'checked' : '' }} value="{{ $cau['answer'] }}">
                        <label class="form-check-label" for="answer_{{ $cau['answer'] }}">Qua người thân, bạn bè.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question_two" id="answer_{{ $cau['answer'] }}" {{ $cau_2['answer'] == 5 ? 'checked' : '' }} value="{{ $cau['answer'] }}">
                        <label class="form-check-label" for="answer_{{ $cau['answer'] }}">Qua đài, ti vi, báo chí.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question_two" id="answer_{{ $cau['answer'] }}" {{ $cau_2['answer'] == 6 ? 'checked' : '' }} value="{{ $cau['answer'] }}">
                        <label class="form-check-label" for="answer_{{ $cau['answer'] }}">Qua mạng internet.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question_two" id="answer_{{ $cau['answer'] }}" {{ $cau_2['answer'] == 7 ? 'checked' : '' }} value="{{ $cau['answer'] }}">
                        <label class="form-check-label" for="answer_{{ $cau['answer'] }}">Qua hình thức khác</label>
                    </div>
            </div>

            <div class="mb-3">
                <label for="age"><b>Câu 3. Khi cơ quan nhà nước tổ chức xin ý kiến người dân về chính sách nêu ở câu 1, Ông/Bà có thể tham gia góp ý kiến không?</b></label><br>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_three" id="male" {{ $cau_3['answer'] == 1 ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="male">Không thể tham gia, vì không biết thông tin.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_three" id="female" {{ $cau_3['answer'] == 2 ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="female">Không thể tham gia, vì bản thân không muốn</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_three" id="male" {{ $cau_3['answer'] == 3 ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="male">Có thể tham gia, nếu được biết thông tin</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_three" id="female" {{ $cau_3['answer'] == 4 ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="female">Có thể tham gia, nếu được tạo điều kiện thuận tiện.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_three" id="male" {{ $cau_3['answer'] == 5 ? 'checked' : '' }} value="5">
                    <label class="form-check-label" for="male">Chắc chắn tham gia, vì bản thân mong muốn</label>
                </div>

            </div>


            <div  class="mb-3">
                <label for="age"><b>Câu 4. Ông/Bà có suy nghĩ như thế nào về tình trạng công chức gây phiền hà, sách nhiễu cho người dân hiện nay ở địa phương?</b></label><br>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_four" id="male" {{ $cau_4['answer'] == 1 ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="male">Không có công chức nào gây phiền hà, sách nhiễu cho người dân.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_four" id="female" {{ $cau_4['answer'] == 2 ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="female">Một số công chức gây phiền hà, sách nhiễu cho người dân.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_four" id="male" {{ $cau_4['answer'] == 3 ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="male">Nhiều công chức gây phiền hà, sách nhiễu cho người dân</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="age"><b>Câu 5. Ông/Bà suy nghĩ gì về tình trạng người dân phải đưa tiền ngoài quy định cho công chức để công việc được giải quyết hiện nay ở địa phương?</b></label><br>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_five" id="male" {{ $cau_5['answer'] == 1 ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="male">Qua loa phát thanh xã.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_five" id="female" {{ $cau_5['answer'] == 2 ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="female">Không có người dân nào phải đưa tiền ngoài quy định cho công chức.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_five" id="male" {{ $cau_5['answer'] == 3 ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="male">Một số người dân phải đưa tiền ngoài quy định cho công chứ.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_five" id="female" {{ $cau_5['answer'] == 4 ? 'checked' : '' }} value="4">
                    <label class="form-check-label" for="female">Nhiều người dân phải đưa tiền ngoài quy định cho công chức.</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="age"><b>Câu 6. Xin Ông/Bà cho biết hình thức nộp hồ sơ và nhận kết quả giải quyết thủ tục hành chính phù hợp với Ông/Bà?</b></label><br>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_six" id="male" {{ $cau_6['answer'] == 1 ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="male">Theo hình thức trực tiếp (tại cơ quan).</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_six" id="female" {{ $cau_6['answer'] == 2 ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="female">Theo hình thức trực tuyến (qua mạng internet.</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_six" id="male" {{ $cau_6['answer'] == 3 ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="male">Theo cả hình thức trực tiếp và trực tuyến.</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="age"><b>Câu 7. Xin Ông/Bà cho biết hình thức cung cấp thông tin về chính sách phù hợp với Ông/Bà?</b></label><br>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_seven" id="male" {{ $cau_7['answer'] == 1 ? 'checked' : '' }} value="1">
                    <label class="form-check-label" for="male">Theo hình thức trực tiếp (tại cơ quan).</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_seven" id="female" {{ $cau_7['answer'] == 2 ? 'checked' : '' }} value="2">
                    <label class="form-check-label" for="female">Theo hình thức trực tuyến (qua mạng internet).</label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="question_seven" id="male" {{ $cau_7['answer'] == 3 ? 'checked' : '' }} value="3">
                    <label class="form-check-label" for="male">Theo hình thức trực tiếp và trực tuyến.</label>
                </div>
            </div>

            <div class="mb-3">
                <span class="mb-3"><b>Câu 8. Xin Ông/Bà cho biết trải nghiệm của bản thân Ông/Bà đối với các nội dung trong bảng dưới đây?</b></span>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Nội dung</th>
                        <th scope="col" class="text-center">Đã từng/ Có</th>
                        <th scope="col" class="text-center">Chưa từng/ Không có</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($cau_8 as $key => $cau)
                        <tr>
                            <td scope="row">{{ $cacCauHoi8[$key] }}</td>
                            <td class="text-center">
                                <input type="radio" name="question{{ $cau->id }}" {{ $cau->answer == 1 ? 'checked' : '' }} value="khong_quan_tam">
                            </td>
                            <td class="text-center">
                                <input type="radio" name="question{{ $cau->id }}" {{ $cau->answer == 2 ? 'checked' : '' }} value="quan_tam">
                            </td>
                        </tr>
                    @endforeach
                    <!-- Thêm các dòng câu hỏi khác vào đây -->
                    </tbody>
                </table>
            </div>

            <div class="mb-3">
                <span class="mb-3"><b>Câu 9. Xin Ông/Bà cho biết mức độ hài lòng của Ông/Bà về các nội dung trong bảng bên dưới đây.</b></span>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Nội dung</th>
                        <th scope="col" class="text-center">Rất không hài lòng</th>
                        <th scope="col" class="text-center">Không hài lòng</th>
                        <th scope="col" class="text-center">Bình thường</th>
                        <th scope="col" class="text-center">Hài lòng</th>
                        <th scope="col" class="text-center">Rất hài lòng</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th colspan="6">I. VIỆC BAN HÀNH, TỔ CHỨC THỰC HIỆN CÁC CHÍNH SÁCH (Các chính sách nêu ở câu số 1 ở trang 1)</th>
                    </tr>
                    <tr>
                        <th colspan="6">A. Trách nhiệm giải trình của cơ quan</th>
                    </tr>
                    <br>


                    {{-- Kiểm tra và hiển thị dữ liệu --}}
                    @if(!empty($cau_9a))
                        @foreach($cau_9a as $key => $cau9b)
                            <tr>
                                <td scope="row">{{ $cacCauHoi9[$key] }}</td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 1 }}" {{ $cau9b['answer'] == 1 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 1 }}" {{ $cau9b['answer'] == 2 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 1 }}" {{ $cau9b['answer'] == 3 ? 'checked' : '' }} value="binh_thuong">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 1 }}" {{ $cau9b['answer'] == 4 ? 'checked' : '' }} value="hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 1 }}" {{ $cau9b['answer'] == 5 ? 'checked' : '' }} value="rat_hai_long">
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>Không có dữ liệu để hiển thị</p>
                    @endif

                    <tr>
                        <th colspan="6">B. Sự tham gia của người dân</th>
                    </tr>
                        @if(!empty($cau_9b))
                            @foreach($cau_9b as $key => $cau)
                                <tr>
                                    <td scope="row">{{ $cacCauHoi9b[$key] }}</td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 3 }}" {{ $cau['answer'] == 1 ? 'checked' : '' }} value="rat_khong_hai_long">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 3 }}" {{ $cau['answer'] == 2 ? 'checked' : '' }} value="rat_khong_hai_long">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 3 }}" {{ $cau['answer'] == 3 ? 'checked' : '' }} value="binh_thuong">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 3 }}" {{ $cau['answer'] == 4 ? 'checked' : '' }} value="hai_long">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 3 }}" {{ $cau['answer'] == 5 ? 'checked' : '' }} value="rat_hai_long">
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <p>Không có dữ liệu để hiển thị</p>
                        @endif
                    <tr>
                        <th colspan="6">C. Chất lượng chính sách</th>
                    </tr>
                    @if(!empty($cau_9c))
                        @foreach($cau_9c as $key => $cau)
                            <tr>
                                <td scope="row">{{ $cacCauHoi9c[$key] }}</td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 5 }}" {{ $cau['answer'] == 1 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 5 }}" {{ $cau['answer'] == 2 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 5 }}" {{ $cau['answer'] == 3 ? 'checked' : '' }} value="binh_thuong">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 5 }}" {{ $cau['answer'] == 4 ? 'checked' : '' }} value="hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 5 }}" {{ $cau['answer'] == 5 ? 'checked' : '' }} value="rat_hai_long">
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>Không có dữ liệu để hiển thị</p>
                    @endif
                    <tr>
                        <th colspan="6"><b>D. Kết quả, tác động của chính sách</b></th>
                    </tr>
{{--                    {{$cau_9d}}--}}
                    @if(!empty($cau_9d))
                        @foreach($cau_9d as $key => $cau)
                            <tr>
                                <td scope="row">{{ $cacCauHoi9d[$key] }}</td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 13 }}" {{ $cau['answer'] == 1 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 13 }}" {{ $cau['answer'] == 2 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 13 }}" {{ $cau['answer'] == 3 ? 'checked' : '' }} value="binh_thuong">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 13 }}" {{ $cau['answer'] == 4 ? 'checked' : '' }} value="hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 13 }}" {{ $cau['answer'] == 5 ? 'checked' : '' }} value="rat_hai_long">
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>Không có dữ liệu để hiển thị</p>
                    @endif
                    <tr>
                        <th colspan="6"><b>II. VIỆC CUNG ỨNG DỊCH VỤ HÀNH CHÍNH CÔNG</b></th>
                    </tr>
                    <tr>
                        <th colspan="6"><b>I. Tiếp cận</b></th>
                    </tr>
                        @if(!empty($cau_91))
                            @foreach($cau_91 as $key => $cau)
                                <tr>
                                    <td scope="row">{{ $cacCauHoi91[$key] }}</td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 15 }}" {{ $cau['answer'] == 1 ? 'checked' : '' }} value="rat_khong_hai_long">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 15 }}" {{ $cau['answer'] == 2 ? 'checked' : '' }} value="rat_khong_hai_long">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 15 }}" {{ $cau['answer'] == 3 ? 'checked' : '' }} value="binh_thuong">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 15 }}" {{ $cau['answer'] == 4 ? 'checked' : '' }} value="hai_long">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 15 }}" {{ $cau['answer'] == 5 ? 'checked' : '' }} value="rat_hai_long">
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <p>Không có dữ liệu để hiển thị</p>
                        @endif
                    <tr>
                        <th colspan="6"><b>II. Thủ tục hành chính</b></th>
                    </tr>
                    @if(!empty($cau_92))
                        @foreach($cau_92 as $key => $cau)
                            <tr>
                                <td >{{ $cacCauHoi92[$key] }}</td>

                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 19 }}" {{ $cau['answer'] == 1 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 19 }}" {{ $cau['answer'] == 2 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 19 }}" {{ $cau['answer'] == 3 ? 'checked' : '' }} value="binh_thuong">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 19 }}" {{ $cau['answer'] == 4 ? 'checked' : '' }} value="hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 19 }}" {{ $cau['answer'] == 5 ? 'checked' : '' }} value="rat_hai_long">
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>Không có dữ liệu để hiển thị</p>
                    @endif

                    <tr>
                        <th colspan="6"><b>III. Công chức trực tiếp giải quyết công việc</b></th>
                    </tr>
                    @if(!empty($cau_93))
                        @foreach($cau_93 as $key => $cau)
                            <tr>
                                <td scope="row">{{ $cacCauHoi93[$key] }}</td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 23 }}" {{ $cau['answer'] == 1 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 23 }}" {{ $cau['answer'] == 2 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 23 }}" {{ $cau['answer'] == 3 ? 'checked' : '' }} value="binh_thuong">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 23 }}" {{ $cau['answer'] == 4 ? 'checked' : '' }} value="hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 23 }}" {{ $cau['answer'] == 5 ? 'checked' : '' }} value="rat_hai_long">
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>Không có dữ liệu để hiển thị</p>
                    @endif

                    <tr>
                        <th colspan="6">
                            <b>
                                IV. Kết quả (Có thể là được cấp giấy tờ hoặc bị từ

                                chối cấp giấy tờ)
                            </b>
                        </th>
                    </tr>

                    @if(!empty($cau_94))
                        @foreach($cau_94 as $key => $cau)
                            <tr>
                                <td scope="row">{{ $cacCauHoi94[$key] }}</td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 19 }}" {{ $cau['answer'] == 1 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 19 }}" {{ $cau['answer'] == 2 ? 'checked' : '' }} value="rat_khong_hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 19 }}" {{ $cau['answer'] == 3 ? 'checked' : '' }} value="binh_thuong">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 19 }}" {{ $cau['answer'] == 4 ? 'checked' : '' }} value="hai_long">
                                </td>
                                <td class="text-center">
                                    <input type="radio" name="question{{ $key + 19 }}" {{ $cau['answer'] == 5 ? 'checked' : '' }} value="rat_hai_long">
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>Không có dữ liệu để hiển thị</p>
                    @endif

                    <tr>
                        <th colspan="6">
                            <b>
                                V. Cơ quan nhà nước tiếp nhận, xử lý phản ánh,
                                kiến nghị của người dân
                            </b>
                        </th>
                    </tr>
                        @if(!empty($cau_95))
                            @foreach($cau_95 as $key => $cau)
                                <tr>
                                    <td scope="row">{{ $cacCauHoi95[$key] }}</td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 31 }}" {{ $cau['answer'] == 1 ? 'checked' : '' }} value="rat_khong_hai_long">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 31 }}" {{ $cau['answer'] == 2 ? 'checked' : '' }} value="rat_khong_hai_long">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 31 }}" {{ $cau['answer'] == 3 ? 'checked' : '' }} value="binh_thuong">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 31 }}" {{ $cau['answer'] == 4 ? 'checked' : '' }} value="hai_long">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="question{{ $key + 31 }}" {{ $cau['answer'] == 5 ? 'checked' : '' }} value="rat_hai_long">
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <p>Không có dữ liệu để hiển thị</p>
                        @endif
                    </tbody>
                </table>
            </div>


            <div class="mb-3">
                <span class="mb-3"><b>Câu 10. Xin Ông/Bà cho biết mức độ Ông/Bà mong muốn cơ quan nhà nước tập trung ưu tiên nguồn lực để cải thiện chất lượng các vấn đề trong bảng dưới đây?</b></span>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Nội dung</th>
                        <th scope="col" class="text-center">Rất nhiều</th>
                        <th scope="col" class="text-center">Nhiều </th>
                        <th scope="col" class="text-center">Ít </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($cau_10 as $key => $cau)
                        <tr>
                            <td scope="row">{{ $cacCauHoi10[$key] }}</td>
                            <td class="text-center">
                                <input type="radio" name="question{{ $cau->id }}" {{ $cau->answer == 1 ? 'checked' : '' }} value="khong_quan_tam">
                            </td>
                            <td class="text-center">
                                <input type="radio" name="question{{ $cau->id }}" {{ $cau->answer == 2 ? 'checked' : '' }} value="quan_tam">
                            </td>
                            <td class="text-center">
                                <input type="radio" name="question{{ $cau->id }}" {{ $cau->answer == 3 ? 'checked' : '' }} value="quan_tam">
                            </td>
                        </tr>
                    @endforeach
                    <!-- Thêm các dòng câu hỏi khác vào đây -->
                    </tbody>
                </table>
            </div>
            <div class="mb-3">
                <div>
                    <label for="province"><b>Ý kiến khác (xin ghi cụ thể):</b></label>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" name="reviews" placeholder="Nhập ý kiến khác tại đây..." id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Ý kiến</label>
                </div>
            </div>
        </div>

        <div>
            <h4 class="text-center">XIN TRÂN TRỌNG CẢM ƠN ÔNG/BÀ!</h4>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Gửi</button>
        </div>


    </form>
</div>

<!-- Link JS của Bootstrap (đặt trước thẻ đóng body) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
