# Lab 01 — Vận hành dự án trên linux và viết shell script

Mã mẫu cho phần hướng dẫn và mã khởi đầu cho bài tự làm.

## Mở bài

Mở terminal Ubuntu/WSL tại thư mục chứa `lab.sh`. Dùng PHP từ 8.1 và Git. Hướng dẫn chi tiết, sơ đồ, đoạn mã cần sửa, dữ liệu đối chiếu và rubric nằm trong tài liệu của bài lab.

```bash
bash lab.sh check
bash lab.sh run
```

Mở http://127.0.0.1:8101. Giữ terminal máy chủ hoạt động; dùng terminal thứ hai để kiểm thử. Nhấn Ctrl+C để dừng.

Bài này không cần PostgreSQL, Composer hoặc framework.

## Kiểm tra bài

Chạy bộ kiểm thử tự động:

```bash
bash lab.sh check
bash lab.sh test
bash lab.sh extend
```

Hoặc chạy kiểm thử trực tiếp từng script:

```bash
# Kiểm tra môi trường (Phần mẫu)
bash scripts/check-env.sh
echo "exit=$?"

# Kiểm tra quét mã nguồn PHP (Phần mở rộng)
bash scripts/scan-source.sh fixtures/valid
echo "exit=$?"

bash scripts/scan-source.sh fixtures/not-found
echo "exit=$?"
```

`test` kiểm tra phần mẫu (`CHECK_ENV=PASS`, mã thoát `0`); `extend` kiểm tra phần tự làm (`SHELL_CASES=4 FAILED=0`).

### Bảng tình huống kiểm thử và kết quả mong đợi

| Tình huống | Đầu vào kiểm thử | Kết quả mong đợi (`stdout` / `stderr`) | Mã thoát |
| --- | --- | --- | --- |
| **Đúng (Valid)** | Thư mục có 2 tệp PHP đúng cú pháp, có thư mục con chứa khoảng trắng (`sub folder/b.php`) | `TOTAL=2 PASS=2 FAIL=0` | `0` |
| **Sai (Mixed)** | Thư mục có 3 tệp PHP (2 tệp đúng, 1 tệp sai cú pháp `broken.php`) | Kiểm tra đủ cả 3 tệp, không dừng giữa chừng; `TOTAL=3 PASS=2 FAIL=1` | `1` |
| **Biên (Missing)** | Thư mục không tồn tại hoặc không có quyền đọc (`not-found`) | Báo lỗi thư mục không tồn tại/không đọc được ra `stderr` | `2` |
| **Biên (Empty)** | Thư mục tồn tại nhưng không có tệp `.php` nào (`empty`) | `TOTAL=0 PASS=0 FAIL=0` và báo không có tệp PHP để kiểm tra ra `stderr` | `2` |

### Giải thích luồng mã

1. **Phần mẫu ([`scripts/check-env.sh`](scripts/check-env.sh))**:
   - Dùng `set -u` để báo lỗi nếu truy cập biến chưa khởi tạo.
   - Xác định `root` từ đường dẫn của chính tệp script (`${BASH_SOURCE[0]}`), giúp chạy đúng dù gọi từ bất kỳ thư mục nào.
   - Dùng hàm `check_tool` và vòng lặp `for` kiểm tra `php`, `git`, cùng các tệp `README.md`, `public/index.php`. Nếu thiếu bất kỳ điều kiện nào, tăng biến đếm `fail` và thoát với mã `2`.
   - Cuối cùng chạy `php -l "$root/public/index.php"`: nếu đúng cú pháp in `CHECK_ENV=PASS` (mã `0`), nếu lỗi cú pháp in `CHECK_ENV=FAIL` ra `stderr` và thoát với mã `1`.

2. **Phần tự làm ([`scripts/scan-source.sh`](scripts/scan-source.sh))**:
   - **Kiểm tra đầu vào (TODO 1)**: Kiểm tra đủ 1 tham số, kiểm tra có công cụ `php` (`command -v php`) và thư mục đầu vào tồn tại, đọc được (`[[ ! -d "$root" || ! -r "$root" ]]`). Nếu không đạt thì báo lỗi ra `stderr` và `exit 2`.
   - **Duyệt và kiểm tra tệp (TODO 2)**: Dùng `find "$root" -type f -name '*.php' -print0` kết hợp `while IFS= read -r -d '' file` để duyệt đệ quy mọi thư mục con và giữ nguyên tên tệp/thư mục có khoảng trắng. Đặt `php -l "$file"` trong điều kiện `if` để khi gặp tệp lỗi cú pháp chỉ tăng `failed` rồi tiếp tục kiểm tra các tệp còn lại.
   - **Tổng hợp và mã thoát (TODO 3)**: In chuỗi tổng hợp `TOTAL=%s PASS=%s FAIL=%s`. Kiểm tra nếu `total -eq 0` (thư mục không có tệp PHP) thì `exit 2`; nếu `failed -gt 0` thì `exit 1`; nếu tất cả đạt thì `exit 0`.

## Tệp nộp

Giữ mã nguồn, dữ liệu mẫu và kiểm thử. Ghi lại lệnh chạy trong README. Không đưa `.local`, mật khẩu hoặc dữ liệu cá nhân thật vào kho mã và gói nộp. Nộp đúng commit theo yêu cầu của bài; nếu dùng Actions, đính kèm lần chạy tương ứng.


## Phần trình bày giao diện

Lab này giữ CSS cục bộ tại `public/assets/css/app.css`. HTML nằm trong `public/`; các lab có nhiều trang dùng `templates/header.php` và `templates/footer.php`. Có thể lần từ các lớp `form-field`, `event-item`, `error-summary` sang CSS để đọc cách trình bày; Lab01 chỉ dùng phần trang giới thiệu.

Các lớp, nhãn và bố cục chỉ phục vụ hiển thị. Giữ nguyên khối PHP, GET/POST, tên trường, giá trị option, hidden input và thuộc tính kiểm tra đầu vào khi thực hành. Không cần JavaScript, thư viện hoặc bước build mới để chạy giao diện.


## Giao diện Material 3

Màu và kiểu chữ nằm trong `public/assets/css/tokens.css`; bố cục trong `app.css`. Không có bước build hoặc thư viện mới.
