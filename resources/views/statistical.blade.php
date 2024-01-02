<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Column Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h2 class="text-center mt-4">THỐNG KÊ CÂU TRẢ LỜI</h2>
<div>
    <div class="container">
        <div class="mb-3 mt-3">
            <span><b>Câu 1. Xin Ông/Bà cho biết mức độ quan tâm của Ông/Bà đối với các chính sách của cơ quan nhà nước trong bảng dưới đây?</b></span>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th class="text-center" scope="col">Không Quan Tâm</th>
                    <th class="text-center" scope="col">Quan Tâm Một Chút</th>
                    <th class="text-center" scope="col">Rất Quan Tâm</th>
                </tr>
                </thead>
                <tbody>
                @foreach($questions as $index => $question)
                    <tr>
                        <td>{{ $question }}</td>
                        @foreach($results[$index + 1] as $count)
                            <td>{{ $count }}</td>
                        @endforeach
                    </tr>
                @endforeach

                <!-- Thêm các dòng câu hỏi khác vào đây -->
                </tbody>
            </table>
        </div>

        <div class="mb-3 mt-3">
            <label for="age"><b>Câu 2. Ông/Bà sử dụng kênh thông tin nào để theo dõi các chính sách nêu ở câu 1?</b></label><br>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Kênh thông tin</th>
                    <th class="text-center" scope="col">Số người quan tâm</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result2 as $questionNumber => $answers)
                    @foreach($answers as $answerNumber => $count)
                        <tr>
                            <td>{{ $answerNumber }}</td>
                            <td>{{ $count }}</td>
                        </tr>
                    @endforeach
                @endforeach
                <!-- Thêm các dòng câu hỏi khác vào đây -->
                </tbody>
            </table>
        </div>

        <div class="mb-3  mt-3">
            <label for="age"><b>Câu 3. Khi cơ quan nhà nước tổ chức xin ý kiến người dân về chính sách nêu ở câu 1, Ông/Bà có thể tham gia góp ý kiến không?</b></label><br>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Kênh thông tin</th>
                    <th class="text-center" scope="col">Số người quan tâm</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result3 as $questionNumber => $answers)
                    @foreach($answers as $answerNumber => $count)
                        <tr>
                            <td>{{ $answerNumber }}</td>
                            <td>{{ $count }}</td>
                        </tr>
                    @endforeach
                @endforeach
                <!-- Thêm các dòng câu hỏi khác vào đây -->
                </tbody>
            </table>
        </div>


        <div class="mb-3">
            <label for="age"><b>Câu 4. Ông/Bà có suy nghĩ như thế nào về tình trạng công chức gây phiền hà, sách nhiễu cho người dân hiện nay ở địa phương?</b></label><br>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Kênh thông tin</th>
                    <th class="text-center" scope="col">Số người quan tâm</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result4 as $questionNumber => $answers)
                    @foreach($answers as $answerNumber => $count)
                        <tr>
                            <td>{{ $answerNumber }}</td>
                            <td>{{ $count }}</td>
                        </tr>
                    @endforeach
                @endforeach
                <!-- Thêm các dòng câu hỏi khác vào đây -->
                </tbody>
            </table>
        </div>

        <div class="mb-3">
            <label for="age"><b>Câu 5. Ông/Bà suy nghĩ gì về tình trạng người dân phải đưa tiền ngoài quy định cho công chức để công việc được giải quyết hiện nay ở địa phương?</b></label><br>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Kênh thông tin</th>
                    <th class="text-center" scope="col">Số người quan tâm</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result5 as $questionNumber => $answers)
                    @foreach($answers as $answerNumber => $count)
                        <tr>
                            <td>{{ $answerNumber }}</td>
                            <td>{{ $count }}</td>
                        </tr>
                    @endforeach
                @endforeach
                <!-- Thêm các dòng câu hỏi khác vào đây -->
                </tbody>
            </table>
        </div>

        <div class="mb-3">
            <label for="age"><b>Câu 6. Xin Ông/Bà cho biết hình thức nộp hồ sơ và nhận kết quả giải quyết thủ tục hành chính phù hợp với Ông/Bà?</b></label><br>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Kênh thông tin</th>
                    <th class="text-center" scope="col">Số người quan tâm</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result6 as $questionNumber => $answers)
                    @foreach($answers as $answerNumber => $count)
                        <tr>
                            <td>{{ $answerNumber }}</td>
                            <td>{{ $count }}</td>
                        </tr>
                    @endforeach
                @endforeach
                <!-- Thêm các dòng câu hỏi khác vào đây -->
                </tbody>
            </table>
        </div>

        <div class="mb-3">
            <label for="age"><b>Câu 7. Xin Ông/Bà cho biết hình thức cung cấp thông tin về chính sách phù hợp với Ông/Bà?</b></label><br>

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Kênh thông tin</th>
                    <th class="text-center" scope="col">Số người quan tâm</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result7 as $questionNumber => $answers)
                    @foreach($answers as $answerNumber => $count)
                        <tr>
                            <td>{{ $answerNumber }}</td>
                            <td>{{ $count }}</td>
                        </tr>
                    @endforeach
                @endforeach
                <!-- Thêm các dòng câu hỏi khác vào đây -->
                </tbody>
            </table>
        </div>

        <div class="mb-3">
            <span><b>Câu 8. Xin Ông/Bà cho biết trải nghiệm của bản thân Ông/Bà đối với các nội dung trong bảng dưới đây?</b></span>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Câu hỏi</th>
                    <th>Đã từng/ Có</th>
                    <th>Chưa từng/ Không có</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result8 as $index => $answers)
                    <tr>
                        <td>{{ $cacCauHoi8[$index - 1] }}</td>
                        <td>{{ $answers[1] }}</td>
                        <td>{{ $answers[2] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

        <div class="mb-3">
            <span><b>Câu 9. Xin Ông/Bà cho biết trải nghiệm của bản thân Ông/Bà đối với các nội dung trong bảng dưới đây?</b></span>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Câu hỏi</th>
                    <th>Rất không hài lòng</th>
                    <th>Không hài lòng</th>
                    <th>Bình thường</th>
                    <th>Hài lòng</th>
                    <th>Rất hài lòng</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result9 as $index => $answers)
                    <tr>
                        <td>{{ $cacCauHoi9[$index - 1] }}</td>
                        <td>{{ $answers[1] }}</td>
                        <td>{{ $answers[2] }}</td>
                        <td>{{ $answers[3] }}</td>
                        <td>{{ $answers[4] }}</td>
                        <td>{{ $answers[5] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>


        <div class="mb-3">
            <span><b>Câu 10. Xin Ông/Bà cho biết mức độ Ông/Bà mong muốn cơ quan nhà nước tập trung ưu tiên nguồn lực để cải thiện chất lượng các vấn đề trong bảng dưới đây?</b></span>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Câu hỏi</th>
                    <th>Rất nhiều</th>
                    <th>Nhiều</th>
                    <th>Ít</th>
                </tr>
                </thead>
                <tbody>
                @foreach($result10 as $index => $answers)
                    @if(array_key_exists($index - 1, $cacCauHoi10) && isset($answers[1]) && isset($answers[2]) && isset($answers[3]))
                        <tr>
                            <td>{{ $cacCauHoi10[$index - 1] }}</td>
                            <td>{{ $answers[1] }}</td>
                            <td>{{ $answers[2] }}</td>
                            <td>{{ $answers[3] }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>



    </div>
</div>

</body>
</html>
