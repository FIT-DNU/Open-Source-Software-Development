<?php
declare(strict_types=1);

final class RegistrationPolicy
{
    public function decide(int $capacity, int $registered, bool $isOpen, bool $hasWaitingList): string
    {
        // 1. Kiểm tra sức chứa không hợp lệ hoặc số lượng đăng ký không hợp lệ
        if ($capacity <= 0 || $registered < 0 || $registered > $capacity) {
            return 'rejected';
        }

        // 2. Nếu sự kiện đóng (isOpen = false), từ chối ngay cả khi còn chỗ
        if (!$isOpen) {
            return 'rejected';
        }

        // 3. Sự kiện mở và còn chỗ
        if ($registered < $capacity) {
            return 'confirmed';
        }

        // 4. Sự kiện mở, đã đầy chỗ, có danh sách chờ
        if ($hasWaitingList) {
            return 'waiting';
        }

        // 5. Mặc định còn lại (hết chỗ, không có danh sách chờ)
        return 'rejected';
    }
}
