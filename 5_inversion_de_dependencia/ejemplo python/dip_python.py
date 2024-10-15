class EmailSender:
    def send_email(self, message):
        print(f"Enviando email con el mensaje: {message}")


class NotificationService:
    def __init__(self):
        self.email_sender = EmailSender()  # Dependencia directa de la clase de bajo nivel

    def notify(self, message):
        self.email_sender.send_email(message)


# Uso del sistema
notification_service = NotificationService()
notification_service.notify("Hello! This is a test message")
