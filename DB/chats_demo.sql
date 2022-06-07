SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";

INSERT INTO `chats` (`id`, `uid`, `name`, `avatar`, `rname`, `rsname`, `active`) VALUES
	(1, 224946710, 'GorAlex97', 'https://cdn4.telegram-cdn.org/file/ZP_r8oFOVNM21mzDBjCZrj_FWLxosejll1IJbgWpBQaezDdNCuMXuR0LGkiuZoa1AJbtiVKV6brVSotdp9GlyxYmIgyNrjJeRHXNDz4MhqoTFlwYu10BsfnVrp3K8WxywwmaYEQlsZxtZqiciBVbHqRw10h9LwI8jsDxABzHkzJ7ZkMmPvaLj6DwySjRygmLRuPIXHFg8NHgE__uaBc6-xgO-8gGX5KsFawBMlT5B0EBMb8evpNom0oGCxSkSk1Zh9h5NB1mFqnEfXua_CCEth_R0wfpds8oCxql9hALqPCet1th8T5zwmqQCosYs-JhTsrdw_oXt91NeAAv4R6r5Q.jpg', NULL, NULL, 1),
	(2, 190266189, 'BogIriVit', 'https://cdn4.telegram-cdn.org/file/FE_iVjFIh3N8ZFA1rH-gMXcGAkPuKa1nGV6R1xTafXBMvOYdGzBHNJjTTF8tow4MBKrWHuznsQJ_R58dd5sFr2F5kFqxiLH31j_G6-7VLMTcmjNeueh01SAWNN_EOumvNDHACuPc-wDyyDt0O85rgZMGorKxBFBvT1CwzNgKktnmiFDA7dHSwLlkkCp7uW921LwCqpE-sQieXeKFxb7HKHnkTmjNclEALMMVYZqDlRNIRnbB9Bd9H2_sQVfW1QdkyRcBahQX6nfLaXByXE_q1JojvOfcGib1kCOcBLoYyEpfgOhGFJJSUo4pAEmxWH3R6F6tC3uUpFH2FR6gtZJXuw.jpg', NULL, NULL, 1),
	(3, 479443489, 'GorAlex97test', '', 'Менеджер -', 'Alex', 1),
	(4, 1, 'Main bot', '', NULL, NULL, 0);

INSERT INTO `managers` (`id`, `uid`, `active`) VALUES
	(1, 1, 1),
	(2, 479443489, 1);

INSERT INTO `messages` (`id`, `uid`, `content`, `date`, `sender`, `view`) VALUES
	(1, 224946710, '/start', '2022-06-02 01:50:18', 224946710, 1),
	(2, 224946710, 'Привет! Напиши своё предложение следующим сообщением, и мы его позже опубликем.', '2022-06-02 01:57:16', 1, 1),
	(3, 224946710, 'Моё первое сообщение! Моё первое сообщение!  Моё первое сообщение! Моё первое сообщение! Моё первое сообщение! Моё первое сообщение! Моё первое сообщение! Моё первое сообщение! Моё первое сообщение! Моё первое сообщение!', '2022-06-02 01:58:21', 224946710, 1),
	(4, 190266189, '/start', '2022-06-02 01:58:46', 190266189, 1),
	(5, 190266189, 'Привет! Напиши своё предложение следующим сообщением, и мы его позже опубликем.', '2022-06-02 01:59:05', 1, 1),
	(6, 1, '/start', '2022-06-02 02:08:12', 1, 1),
	(7, 479443489, '/start', '2022-06-02 02:08:29', 479443489, 1),
	(8, 479443489, 'Привет! Напиши своё предложение следующим сообщением, и мы его позже опубликем.', '2022-06-02 02:08:51', 1, 1);
