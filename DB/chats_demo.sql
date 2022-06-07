SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";

INSERT INTO `chats` (`id`, `uid`, `name`, `avatar`, `rname`, `rsname`, `active`) VALUES
(1, 224946710, 'GorAlex97', 'https://cdn4.telegram-cdn.org/file/etzX02QRiaZAhhCBcGqwBMUKcoeCZ5V3khooQiPKvry9U1StIo6C50ooU7DkSUekQBE-SXvOOnOfG6FNbeNs2oQnb9cXgKfZqnYs8KM3qs-prO2J0lKczFl9Hi6Y03TahRliHDNvmkeWp5sm13YdDZxyBBSWa1r-OEPgAP0l8VJQ9p8qnTLKFo-DveW6z6NEiXI7I0Pi14DlYSIIKkKHjsC6VP9_BpEuLFXejgeGVmC2PK9VkXfzmFHVJmdBn9YkXSbIVyhSkxP9qc0SmjAJkSqRoURrOue0nL-r9DWpBNpRoIy8bEfKakEENS6Tz8mHYrS803qufSsoY-OBwE_u8g.jpg', NULL, NULL, 1),
(2, 190266189, 'BogIriVit', 'https://cdn4.telegram-cdn.org/file/k8rDkioLiJOf81Wec2notves8qOriZKqMQOnGfXj1w9gRv6xwvCX_LD94UF_hzCkTo-k4YBRuqV-LPpSZhHYBkJ22ACqVxNC5EkFZuo75mr6ctgAjRv6htBqkTzeOxpZlJTHNe8MgiWuk-4PJ8Usv3YmlKAjdSVzcv1HgT_uC6xJPAh2dOeLJdg8yN0Uh-Lq74fBXkaPVGDWRGR1zLo6YAP_EADXgpeo4eSI2YTztmd6lM5AQhU1JsgKZO_yUd7aONM3Oq8P-TJKOw4LiBDB_SZibKa91lIqftOMonzPrk_UNif0zpH_0HyOsjBA88WL-DH-a15RSjCEmcc0nb84Zw.jpg', NULL, NULL, 1),
(3, 479443489, 'GorAlex97test', 'https://cdn4.telegram-cdn.org/file/etzX02QRiaZAhhCBcGqwBMUKcoeCZ5V3khooQiPKvry9U1StIo6C50ooU7DkSUekQBE-SXvOOnOfG6FNbeNs2oQnb9cXgKfZqnYs8KM3qs-prO2J0lKczFl9Hi6Y03TahRliHDNvmkeWp5sm13YdDZxyBBSWa1r-OEPgAP0l8VJQ9p8qnTLKFo-DveW6z6NEiXI7I0Pi14DlYSIIKkKHjsC6VP9_BpEuLFXejgeGVmC2PK9VkXfzmFHVJmdBn9YkXSbIVyhSkxP9qc0SmjAJkSqRoURrOue0nL-r9DWpBNpRoIy8bEfKakEENS6Tz8mHYrS803qufSsoY-OBwE_u8g.jpg', 'Менеджер -', 'Alex', 1),
(4, 1, 'Main bot', 'https://cdn4.telegram-cdn.org/file/BSVhYsaYxLvWRwbnb0OubU5qS2OS-o0HrIlHmMK4TZtFlbseQsDsPPPo0BJ6_gDh0Dr0vz9oAjbDnzZP6ZjpV0CiARjC5Og96TdSy3_gO__4CGeY9_kBhd1ukEsBS5Sttxt46hYcyfKXzklNGmIvOv5Rg9lgioD1hBbxUJZcDbXwa-v5IzM6O9SHAolYVw1ySsx2DUVnUGu1qGUPCOJIWohtDTZi0IHbysZO-iaQoTarg0EXw-U5d0tXXBRzkX7O7sWDRg5pPq18JnUGZvIxbH7wQm1oTSKFgCWagN40k1p8p9DJg650irXtUMsNWCqcuFGnfd5BhkvkJJe0At1Huw.jpg', NULL, NULL, 0);

INSERT INTO `managers` (`id`, `uid`, `active`) VALUES
(1, 1, 1),
(2, 479443489, 1);

INSERT INTO `messages` (`id`, `uid`, `content`, `date`, `sender`, `view`) VALUES
(1, 224946710, '/start', '2022-06-01 22:50:18', 224946710, 1),
(2, 224946710, 'Привет! Напиши своё предложение следующим сообщением, и мы его позже опубликем.', '2022-06-01 22:57:16', 1, 1),
(3, 224946710, 'Моё первое сообщение! Моё первое сообщение!  Моё первое сообщение! Моё первое сообщение! Моё первое сообщение! Моё первое сообщение! Моё первое сообщение! Моё первое сообщение! Моё первое сообщение! Моё первое сообщение!', '2022-06-01 22:58:21', 224946710, 1),
(4, 190266189, '/start', '2022-06-01 22:58:46', 190266189, 1),
(5, 190266189, 'Привет! Напиши своё предложение следующим сообщением, и мы его позже опубликем.', '2022-06-01 22:59:05', 1, 1),
(6, 1, '/start', '2022-06-01 23:08:12', 1, 1),
(7, 479443489, '/start', '2022-06-01 23:08:29', 479443489, 1),
(8, 479443489, 'Привет! Напиши своё предложение следующим сообщением, и мы его позже опубликем.', '2022-06-01 23:08:51', 1, 1),
(9, 224946710, 'Как-то так.', '2022-06-04 18:46:00', 224946710, 1),
(10, 224946710, 'Спасибо! Не подскажите место, где это произошло?', '2022-06-04 18:46:53', 479443489, 1),
(11, 224946710, 'Это в Киеве.', '2022-06-04 18:47:10', 224946710, 1),
(12, 224946710, 'ОК', '2022-06-04 18:47:24', 479443489, 1);
