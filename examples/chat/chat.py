import openai

# Установите ваш API-ключ OpenAI
openai.api_key = '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'

# Приветственное сообщение
print("Добро пожаловать! Чем я могу вам помочь?")

# Основной цикл общения
while True:
    # Получите ввод пользователя
    user_input = input("Вы: ")

    # Отправьте запрос к OpenAI
    response = openai.Completion.create(
        engine='text-davinci-003',
        prompt=user_input,
        max_tokens=1000,
        temperature=0.1,
        n=1,
        stop=None
    )

    # Получите ответ от OpenAI
    bot_reply = response.choices[0].text.strip()

    # Выведите ответ бота
    print("Бот: " + bot_reply)
