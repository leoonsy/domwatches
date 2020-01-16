<section id="buy-section">
    <div class="container buy-goods" data-aos="fade-in" data-aos-offset="150" data-aos-duration="1000">
        <form class="buy-goods__form buy-form" action="/buy-check" method="post">
            <div class="buy-goods__step1">
                <h4 class="buy-goods__step1-text"><span>Шаг 1</span>. Выберите часы для покупки и их количество</h4>
            </div>
            <div class="row buy-goods__content text-lg-left text-center">
                <div class="col-lg-3 col-sm-6 buy-goods__item">
                    <div class="buy-goods__item-content">
                        <div class="buy-goods__img">
                            <img src="/public/dist/images/watches/0.png" alt="M-635D-1M9" />
                        </div>
                        <div class="buy-goods__discount buy-goods__discount--few">
                            <span>СКИДКА 20%</span>
                        </div>
                        <h3 class="buy-goods__title">M-635D-1M9</h3>
                        <div class="buy-goods__price">
                            <div class="buy-goods__price-old">
                                2499₽
                            </div>
                            <div class="buy-goods__price-new">
                                1999₽
                            </div>
                        </div>
                        <hr class="buy-goods__item-separator" />
                        <div class="buy-goods__count">
                            <span class="buy-goods__count-text">Количество:</span>
                            <input class="buy-goods__count-input" type="text" value="0" name="inputWatches[M-635D-1M9]">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 buy-goods__item">
                    <div class="buy-goods__item-content">
                        <div class="buy-goods__img">
                            <img src="/public/dist/images/watches/1.png" alt="M-635BK-1M" />
                        </div>
                        <div class="buy-goods__discount buy-goods__discount--few">
                            <span>СКИДКА 20%</span>
                        </div>
                        <h3 class="buy-goods__title">M-635BK-1M</h3>
                        <div class="buy-goods__price">
                            <div class="buy-goods__price-old">
                                2499₽
                            </div>
                            <div class="buy-goods__price-new">
                                1999₽
                            </div>
                        </div>
                        <hr class="buy-goods__item-separator" />
                        <div class="buy-goods__count">
                            <span class="buy-goods__count-text">Количество:</span>
                            <input class="buy-goods__count-input" type="text" value="0" name="inputWatches[M-635BK-1M]">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 buy-goods__item">
                    <div class="buy-goods__item-content">
                        <div class="buy-goods__img">
                            <img src="/public/dist/images/watches/2.png" alt="M-635L-1M9" />
                        </div>
                        <div class="buy-goods__discount">
                            <span>СКИДКА 40%</span>
                        </div>
                        <h3 class="buy-goods__title">M-635L-1M9</h3>
                        <div class="buy-goods__price">
                            <div class="buy-goods__price-old">
                                2499₽
                            </div>
                            <div class="buy-goods__price-new">
                                1499₽
                            </div>
                        </div>
                        <hr class="buy-goods__item-separator" />
                        <div class="buy-goods__count">
                            <span class="buy-goods__count-text">Количество:</span>
                            <input class="buy-goods__count-input" type="text" value="0" name="inputWatches[M-635L-1M9]">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 buy-goods__item">
                    <div class="buy-goods__item-content">
                        <div class="buy-goods__img">
                            <img src="/public/dist/images/watches/3.png" alt="M-635L-7M" />
                        </div>
                        <div class="buy-goods__discount buy-goods__discount--few">
                            <span>СКИДКА 30%</span>
                        </div>
                        <h3 class="buy-goods__title">M-635L-7M</h3>
                        <div class="buy-goods__price">
                            <div class="buy-goods__price-old">
                                2499₽
                            </div>
                            <div class="buy-goods__price-new">
                                1749₽
                            </div>
                        </div>
                        <hr class="buy-goods__item-separator" />
                        <div class="buy-goods__count">
                            <span class="buy-goods__count-text">Количество:</span>
                            <input class="buy-goods__count-input" type="text" value="0" name="inputWatches[M-635L-7M]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="buy-goods__cost">
                <span class="buy-goods__cost-text">Итоговая цена: </span><span class="buy-goods__cost-number">0₽</span>
                <input type="hidden" name="inputPrice" id="inputPrice" value="0" />
            </div>
            <hr class="my-0" />
            <div class="buy-goods__step2">
                <h4 class="buy-goods__step2-text"><span>Шаг 2</span>. Заполните данные для отправки часов Почтой России</h4>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-4 col-form-label">Имя: <span class="buy-form__star">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Имя" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputLastname" class="col-sm-4 col-form-label">Фамилия: <span class="buy-form__star">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputLastname" id="inputLastname" placeholder="Фамилия" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPatronymic" class="col-sm-4 col-form-label">Отчество: <span class="buy-form__star">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputPatronymic" id="inputPatronymic" placeholder="Отчество" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-4 col-form-label">Email: <span class="buy-form__star">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCountry" class="col-sm-4 col-form-label">Страна: <span class="buy-form__star">*</span></label>
                <div class="col-sm-8">
                    <select size="1" class="form-control" name="inputCountry" id="inputCountry">
                        <option selected="selected">Только Россия</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputRegion" class="col-sm-4 col-form-label">Область (край), район: <span class="buy-form__star">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputRegion" id="inputRegion" placeholder="Область (край), район" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCity" class="col-sm-4 col-form-label">Город/село: <span class="buy-form__star">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputCity" id="inputCity" placeholder="Город/село" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-4 col-form-label">Адрес (улица, дом, квартира...): <span class="buy-form__star">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputAddress" id="inputAddress" placeholder="Адрес (улица, дом, квартира...)" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputIndex" class="col-sm-4 col-form-label">Почтовый индекс: <span class="buy-form__star">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputIndex" id="inputIndex" placeholder="Почтовый индекс" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputMobile" class="col-sm-4 col-form-label">Мобильный телефон (для подтверждения заказа): <span class="buy-form__star">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="inputMobile" id="inputMobile" placeholder="Мобильный телефон" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputComment" class="col-sm-4 col-form-label">От себя: </label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="4" cols="30" name="inputComment" id="inputComment" placeholder="Пожелания, вопросы, предложения"></textarea>
                </div>
            </div>
            <!-- <div class="form-group row">
            <div class="col-sm-4">
                <label for="inputCode" class="col-form-label">Код безопасности: <span class="buy-form__star">*</span></label>
                <a href="#" class="nolink" style="margin-left: 0;">
                    <img class="captcha" src="captcha.php" alt="Код безопасности">
                </a>
            </div>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="inputCode" id="inputCode" placeholder="Код безопасности">
            </div>
        </div> -->
            <div class="form-group row mt-4">
                <div class="col-sm-12 text-center">
                    <button class="buy-form__submit btn btn-primary" type="submit">Отправить заказ</button>
                </div>
            </div>
        </form>
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
    </div>
</section>