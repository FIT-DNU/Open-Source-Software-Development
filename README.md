<h2 align="center">
    <a href="https://dainam.edu.vn/vi/khoa-cong-nghe-thong-tin">
    🎓 Faculty of Information Technology (DaiNam University)
    </a>
</h2>
<h2 align="center">
    Open Source Software Development
</h2>
<div align="center">
    <p align="center">
        <img src="docs/logo/aiotlab_logo.png" alt="AIoTLab Logo" width="170"/>
        <img src="docs/logo/fitdnu_logo.png" alt="AIoTLab Logo" width="180"/>
        <img src="docs/logo/dnu_logo.png" alt="DaiNam University Logo" width="200"/>
    </p>

[![AIoTLab](https://img.shields.io/badge/AIoTLab-green?style=for-the-badge)](https://www.facebook.com/DNUAIoTLab)
[![Faculty of Information Technology](https://img.shields.io/badge/Faculty%20of%20Information%20Technology-blue?style=for-the-badge)](https://dainam.edu.vn/vi/khoa-cong-nghe-thong-tin)
[![DaiNam University](https://img.shields.io/badge/DaiNam%20University-orange?style=for-the-badge)](https://dainam.edu.vn)

</div>

## 🚀 1. Các project đã thực hiện dựa trên Platform

Một số project sinh viên đã thực hiện:
- #### [Khoá 17](./docs/projects/K17/README.md)
- #### [Khoá 18]() (Coming soon)
## 📚 2. Bài thực hành Lab01–Lab05

Mỗi bài nằm trên một nhánh riêng, có tài liệu, mã nguồn mẫu và bộ kiểm thử. Chọn bài trong bảng dưới đây hoặc clone riêng nhánh tương ứng. Các TODO là phần sinh viên cần hoàn thiện.

| Bài | Nội dung | Nhánh | Hướng dẫn đầy đủ |
| --- | --- | --- | --- |
| Lab01 | Linux và shell script | [lab1](https://github.com/FIT-DNU/Open-Source-Software-Development/tree/lab1) | [Hướng dẫn Lab01](https://github.com/FIT-DNU/Open-Source-Software-Development/blob/lab1/HUONG_DAN.md) |
| Lab02 | Module PHP kiểm tra điều kiện đăng ký | [lab2](https://github.com/FIT-DNU/Open-Source-Software-Development/tree/lab2) | [Hướng dẫn Lab02](https://github.com/FIT-DNU/Open-Source-Software-Development/blob/lab2/HUONG_DAN.md) |
| Lab03 | Danh sách sự kiện, tìm kiếm và form | [lab3](https://github.com/FIT-DNU/Open-Source-Software-Development/tree/lab3) | [Hướng dẫn Lab03](https://github.com/FIT-DNU/Open-Source-Software-Development/blob/lab3/HUONG_DAN.md) |
| Lab04 | Bản nháp bằng Session và Cookie | [lab4](https://github.com/FIT-DNU/Open-Source-Software-Development/tree/lab4) | [Hướng dẫn Lab04](https://github.com/FIT-DNU/Open-Source-Software-Development/blob/lab4/HUONG_DAN.md) |
| Lab05 | Lưu, truy vấn và thống kê với PostgreSQL **hoặc** MySQL | [lab5](https://github.com/FIT-DNU/Open-Source-Software-Development/tree/lab5) | [Chọn PostgreSQL hoặc MySQL](https://github.com/FIT-DNU/Open-Source-Software-Development/blob/lab5/README.md) |

### Chuẩn bị môi trường

Trên Windows, mở **Ubuntu/WSL** để chạy các lệnh Bash bên dưới. Cần PHP **từ 8.1 trở lên** và Git:

```bash
sudo apt update
sudo apt install php-cli git unzip
php -v
git --version
```

Lab01–04 không cần CSDL, Composer hoặc framework. Lab05 cho phép chọn **PostgreSQL hoặc MySQL**; chỉ cài hệ quản trị và extension PHP của lựa chọn đã chọn theo hướng dẫn bên dưới.

### Clone và chạy từng bài

Chạy mỗi nhóm lệnh từ thư mục bạn muốn lưu bài học. Nếu vừa chạy bài trước, dùng `cd ..` hai lần từ `labN/Ma_nguon` để trở về thư mục chứa các bài rồi mới clone bài tiếp theo. Mỗi lệnh clone tạo một thư mục riêng; nếu đã tải bài, chỉ cần vào thư mục `Ma_nguon` của bài đó để chạy lại.

#### Lab01 — Linux và shell script

```bash
git clone --single-branch --branch lab1 https://github.com/FIT-DNU/Open-Source-Software-Development.git lab1
cd lab1/Ma_nguon
bash lab.sh check
bash lab.sh run
```

Mở [http://127.0.0.1:8101](http://127.0.0.1:8101). Bài thực hành gồm script kiểm tra môi trường và quét cú pháp PHP.

#### Lab02 — Module PHP

```bash
git clone --single-branch --branch lab2 https://github.com/FIT-DNU/Open-Source-Software-Development.git lab2
cd lab2/Ma_nguon
bash lab.sh check
bash lab.sh run
```

Kết quả in ngay trong terminal, không cần trình duyệt. Ví dụ mẫu còn chỗ trả `AVAILABLE`.

#### Lab03 — Tìm kiếm và form

```bash
git clone --single-branch --branch lab3 https://github.com/FIT-DNU/Open-Source-Software-Development.git lab3
cd lab3/Ma_nguon
bash lab.sh check
bash lab.sh run
```

Mở [danh sách sự kiện](http://127.0.0.1:8103) hoặc [form đăng ký](http://127.0.0.1:8103/register.php). Form hợp lệ hiển thị `PREVIEW_OK`; chưa lưu Session hoặc CSDL.

#### Lab04 — Session và Cookie

```bash
git clone --single-branch --branch lab4 https://github.com/FIT-DNU/Open-Source-Software-Development.git lab4
cd lab4/Ma_nguon
bash lab.sh check
bash lab.sh run
```

Mở [http://127.0.0.1:8104/register.php](http://127.0.0.1:8104/register.php). Thử nhập, xem lại, sửa, hủy và hoàn tất bản nháp. Hoàn tất hiển thị `SIMULATED_OK`; chưa ghi CSDL.

#### Lab05 — Chọn PostgreSQL hoặc MySQL

Chỉ cần làm **một** lựa chọn; cùng mục tiêu, TODO thống kê, rubric 10 điểm và yêu cầu nộp bài. Mỗi bản có cấu hình `.local/db.json` riêng; không chép cấu hình/schema giữa hai bản. Cả hai dùng cổng 8105, dừng PHP trước khi chuyển bản. Nếu đã clone `lab5`, vào đúng thư mục lựa chọn thay vì clone lại.

| Lựa chọn | Thư mục sau clone | Hướng dẫn đầy đủ |
| --- | --- | --- |
| PostgreSQL | `lab5/Ma_nguon` | [Hướng dẫn PostgreSQL](https://github.com/FIT-DNU/Open-Source-Software-Development/blob/lab5/HUONG_DAN.md) |
| MySQL >= 8.0.16 | `lab5/Ma_nguon_MySQL` | [Hướng dẫn MySQL](https://github.com/FIT-DNU/Open-Source-Software-Development/blob/lab5/HUONG_DAN_MYSQL.md) |

##### Lựa chọn A — PostgreSQL

```bash
git clone --single-branch --branch lab5 https://github.com/FIT-DNU/Open-Source-Software-Development.git lab5
cd lab5/Ma_nguon
sudo apt install postgresql postgresql-client php-pgsql
sudo service postgresql start
```

**Trước khi chạy ứng dụng**, làm mục [Chuẩn bị riêng cho Lab 05](https://github.com/FIT-DNU/Open-Source-Software-Development/blob/lab5/HUONG_DAN.md): tạo tài khoản và CSDL lab riêng hoặc dùng thông tin giảng viên cấp. Sau đó, tại `lab5/Ma_nguon`:

```bash
bash lab.sh db-config
bash lab.sh check
bash lab.sh sql
```

Nhập thông tin kết nối theo lời nhắc của `db-config`. Khi lệnh `sql` mở cửa sổ PostgreSQL, tạo bảng và kiểm tra dữ liệu mẫu:

```sql
\i database/schema.sql
SELECT id, title FROM events ORDER BY id;
\q
```

Cần thấy 3 sự kiện mẫu. Trở về Bash và chạy:

```bash
bash lab.sh run
```

Mở [http://127.0.0.1:8105/register.php](http://127.0.0.1:8105/register.php). Đăng ký lần đầu trả `CREATED`; cùng email và sự kiện trả `DUPLICATE`. Không đưa thư mục `.local` chứa cấu hình mật khẩu vào Git hoặc bài nộp.

##### Lựa chọn B — MySQL

Dùng PHP >= 8.1 với MySQLi/mysqlnd và MySQL >= 8.0.16. Chạy nhóm lệnh này nếu chọn MySQL:

```bash
git clone --single-branch --branch lab5 https://github.com/FIT-DNU/Open-Source-Software-Development.git lab5
cd lab5/Ma_nguon_MySQL
sudo apt install mysql-server mysql-client php-mysql
sudo service mysql start
```

Làm phần [tạo tài khoản và CSDL MySQL riêng](https://github.com/FIT-DNU/Open-Source-Software-Development/blob/lab5/HUONG_DAN_MYSQL.md) trước; không dùng tài khoản root trong ứng dụng. Sau đó, tại `lab5/Ma_nguon_MySQL`:

```bash
bash lab.sh db-config
bash lab.sh check
bash lab.sh sql
```

Nhập host/cổng MySQL (mặc định `127.0.0.1:3306`) và thông tin tài khoản/CSDL riêng. Client SQL hỏi lại mật khẩu. Trong MySQL client:

```sql
source database/schema.sql;
SELECT id, title FROM events ORDER BY id;
exit
```

Khi thấy ba sự kiện mẫu, trở về Bash và chạy `bash lab.sh run`. Mở [form đăng ký](http://127.0.0.1:8105/register.php): lần đầu `CREATED`, cùng email/sự kiện `DUPLICATE`. Kiểm tra bằng SQL và khởi động lại PHP để kiểm chứng lưu bền vững. MySQL dùng `?` trong truy vấn tham số; không dùng schema hay cú pháp `$1`/`ON CONFLICT` của PostgreSQL.

### Kiểm thử và dừng ứng dụng

Với các bài Web, giữ terminal máy chủ mở; nhấn **Ctrl+C** để dừng. Để chạy kiểm thử trong lúc Web hoạt động, mở terminal Ubuntu/WSL thứ hai và vào đúng thư mục `Ma_nguon` của bài (hoặc `Ma_nguon_MySQL` nếu chọn MySQL ở Lab05):

```bash
bash lab.sh test
bash lab.sh extend
```

- `check`: chỉ kiểm tra môi trường, không xác nhận bài tập hoàn thành.
- `test`: kiểm tra phần mẫu; Lab05 có kiểm thử tích hợp cho hệ quản trị đã chọn; bản MySQL có thêm kiểm tra ràng buộc dữ liệu.
- `extend`: kiểm tra phần tự làm; có thể chưa đạt khi sinh viên chưa hoàn thiện TODO. Không sửa test để bỏ qua lỗi.

Nếu báo `No such file or directory`, kiểm tra `pwd` và `ls`: thư mục hiện tại cần chứa `lab.sh`. Nếu báo `Address already in use`, dừng máy chủ cũ bằng Ctrl+C trước khi chạy lại.

### Kết quả kiểm thử phần mẫu

| Bài | Kết quả yêu cầu của `bash lab.sh test` |
| --- | --- |
| Lab01 | `CHECK_ENV=PASS` |
| Lab02 | `TESTS=5 FAILED=0` |
| Lab03 | `TESTS=7 FAILED=0` |
| Lab04 | `TESTS=6 FAILED=0` |
| Lab05 — PostgreSQL | `TESTS=6 FAILED=0` và `TESTS=7 FAILED=0` |
| Lab05 — MySQL | `TESTS=6 FAILED=0`, `TESTS=7 FAILED=0` và `TESTS=9 FAILED=0` |

Các TODO được giữ nguyên cho sinh viên. Bộ `extend` ở bản khởi đầu còn ca chưa đạt; đây là phần cần tự làm, không phải lỗi clone hoặc cài môi trường.

### Nhập mật khẩu và thử luồng Web

Lab05: chạy `bash lab.sh db-config` trực tiếp trong terminal Ubuntu/WSL tương tác, tại `lab5/Ma_nguon` (PostgreSQL) hoặc `lab5/Ma_nguon_MySQL` (MySQL); không pipe đầu vào. Khi nhập mật khẩu, không có ký tự hoặc dấu sao hiện lên: gõ rồi nhấn Enter. Chỉ kết nối thành công mới có `CAU_HINH=DA_LUU`. Sai mật khẩu không ghi đè cấu hình đã lưu; chạy lại để nhập đúng. Sau đó chạy `check` và tạo schema như hướng dẫn ở trên.

| Bài | Luồng mẫu để tự kiểm tra |
| --- | --- |
| Lab01 | Mở trang mẫu ở cổng 8101; bài shell thực hiện trong terminal. |
| Lab02 | Chạy trong terminal, kết quả mẫu là `AVAILABLE`; không có Web. |
| Lab03 | Tìm `php`/`xyz`, mở form, thử dữ liệu sai rồi đúng; đúng trả `PREVIEW_OK`, chưa lưu dữ liệu. |
| Lab04 | Nhập → xem lại → sửa/hủy → nhập lại và xác nhận; kết quả `SIMULATED_OK`. Thử lưu tùy chọn Cookie. |
| Lab05 | Nhập và xác nhận: `CREATED`; lặp cùng sự kiện–email: `DUPLICATE`. Khởi động lại PHP không mất dữ liệu. |

Dùng dữ liệu thử nghiệm, không dùng thông tin cá nhân thật. Mở phiên trình duyệt riêng để kiểm tra cách ly Session. Cookie tùy chọn `view` của Lab04/05 dùng chung theo host, không tách theo cổng; dùng hai phiên riêng nếu so sánh đồng thời hai lab.

Nếu Lab05 mất kết nối lúc lưu, ứng dụng giữ bản nháp và báo lỗi 503. Sau khi khôi phục kết nối, quay lại xác nhận để thử lại. Danh sách sự kiện hiển thị số chỗ mẫu, không phản ánh số đăng ký thực trong CSDL. Bộ lọc nâng cao, kiểm tra bản nháp mở rộng và thống kê vẫn là TODO dành cho sinh viên.


### Bản giao diện Material 3

Các nhánh [lab1](https://github.com/FIT-DNU/Open-Source-Software-Development/tree/lab1), [lab3](https://github.com/FIT-DNU/Open-Source-Software-Development/tree/lab3), [lab4](https://github.com/FIT-DNU/Open-Source-Software-Development/tree/lab4), [lab5](https://github.com/FIT-DNU/Open-Source-Software-Development/tree/lab5) đã bổ sung giao diện, ảnh minh họa cục bộ và tài liệu tương ứng. [lab2](https://github.com/FIT-DNU/Open-Source-Software-Development/tree/lab2) tiếp tục chạy trong terminal. Giữ nguyên các lệnh clone/chạy phía trên; không cần Node, Composer hay bước build.

Với Lab03–05, sau khi chạy máy chủ, mở khu thử riêng:

| Bài | Sáu sự kiện hư cấu | Thử vé và ghế |
| --- | --- | --- |
| Lab03 | [Sự kiện mẫu](http://127.0.0.1:8103/ui-demo.php) | [Chọn thử](http://127.0.0.1:8103/ticket-preview.php?id=demo-open-source) |
| Lab04 | [Sự kiện mẫu](http://127.0.0.1:8104/ui-demo.php) | [Chọn thử](http://127.0.0.1:8104/ticket-preview.php?id=demo-open-source) |
| Lab05 | [Sự kiện mẫu](http://127.0.0.1:8105/ui-demo.php) | [Chọn thử](http://127.0.0.1:8105/ticket-preview.php?id=demo-open-source) |

Lab05 cần cấu hình PostgreSQL hoặc MySQL theo lựa chọn cho các trang nghiệp vụ. Danh sách, biểu mẫu và mã kết quả `PREVIEW_OK`, `SIMULATED_OK`, `CREATED`, `DUPLICATE` giữ nguyên ý nghĩa. Metadata hư cấu ở trang chi tiết chỉ phục vụ trình bày; ID demo không đi vào đăng ký thật.

Khu thử vé/ghế chỉ giữ lựa chọn trong bộ nhớ trang, tải lại sẽ xóa; chưa giữ ghế, tạo vé hay thanh toán. Có 96 ghế mẫu, 68 khả dụng; hai VIP giá mẫu 350.000 đồng có tổng 700.000 đồng. Bản sinh viên vẫn giữ TODO và các ca `extend` chưa đạt cho sinh viên tự làm. Có thể kiểm tra dữ liệu UI riêng bằng `php tests/ui-demo.php` tại `Ma_nguon` Lab03–05.

Ảnh SVG tự tạo có giấy phép CC0 trong `Ma_nguon/public/assets/images/LICENSE.txt` của từng lab Web. README, HUONG_DAN.md, ảnh hướng dẫn và Word của các bài bị ảnh hưởng đã cập nhật; mục tiêu và rubric giữ nguyên.

[Ranh giới sản phẩm](docs/communitypass/PRODUCT.md) · [Hệ thống trình bày](docs/communitypass/DESIGN.md)
