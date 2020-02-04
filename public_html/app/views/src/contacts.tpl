<section id="contacts-section">
    <div class="container contacts">
        <div class="row">
            <div class="col-lg-6">
                <div class="contacts__info" data-aos="fade-right" data-aos-offset="150" data-aos-duration="1000">
                    <h4 class="contacts__title">ИНФОРМАЦИЯ</h4>
                    <div class="contacts__communication-info">
                        <div class="contacts__communication-single communication-single">
                            <div class="communication-single__icon">
                                <i class="icon-mobile"></i>
                            </div>
                            <div class="communication-single__text">
                                <h4 class="communication-single__header">Телефон:</h4>
                                <p><a href="tel:+79198592135">8 (919) 859-21-35</a></p>
                            </div>
                        </div>
                        <div class="contacts__communication-single communication-single">
                            <div class="communication-single__icon">
                                <i class="icon-mail"></i>
                            </div>
                            <div class="communication-single__text">
                                <h4 class="communication-single__header">Email:</h4>
                                <p><a href="mailto:support@domwatches.ru">support@domwatches.ru</a></p>
                            </div>
                        </div>
                        <div class="contacts__communication-single communication-single">
                            <div class="communication-single__icon">
                                <i class="icon-vkontakte"></i>
                            </div>
                            <div class="communication-single__text">
                                <h4 class="communication-single__header">VK:</h4>
                                <p><a href="https://vk.com/domwatchesru">http://vk.com/domwatchesru</i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contacts__message" data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000">
                    <h4 class="contacts__title">ОБРАТНАЯ СВЯЗЬ</h4>
                    <form class="contacts__form" action="/feedback-check" method="post">
                        <div class="form-row">
                            <div class="col-lg-6 form-group">
                                <div class="contacts__form-style">
                                    <input name="inputName" id="inputName" class="form-control" placeholder="Имя" type="text" />
                                </div>
                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="contacts__form-style input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input name="inputEmail" id="inputEmail" class="form-control" placeholder="Email" type="text" />
                                </div>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="contacts__form-style">
                                    <input name="inputTopic" id="inputTopic" class="form-control" placeholder="Тема" type="text" />
                                </div>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="contacts__form-style">
                                    <textarea name="inputMessage" id="inputMessage" class="form-control" placeholder="Сообщение"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="contacts__form-style">
                                    <button class="contacts__form-submit btn btn-primary" type="submit">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!-- Модальное окно -->
        <div class="modal fade" id="bootstrapModal" tabindex="-1" role="dialog" aria-labelledby="bootstrapModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bootstrapModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Хорошо</button>
                </div>
            </div>
        </div>
    </div>
</section>