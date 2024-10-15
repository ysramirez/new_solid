from abc import ABC, abstractmethod

class Task(ABC):
    
    @abstractmethod
    def create_task(self, title):
        pass

    @abstractmethod
    def assign_responsible(self, user):
        pass
    
    @abstractmethod
    def send_reminder(self):
        pass

    @abstractmethod
    def mark_completed(self):
        pass

class AdminTask(Task):
    def create_task(self, title):
        print(f"Admin creates the task: {title}")

    def assign_responsible(self, user):
        print(f"Admin assigns the task to: {user}")

    def send_reminder(self):
        print("Admin sends reminder")

    def mark_completed(self):
        print("Admin marks the task as completed")

class EmployeeTask(Task):
    def create_task(self, title):
        raise NotImplementedError("The employee cannot create tasks")

    def assign_responsible(self, user):
        raise NotImplementedError("The employee cannot assign responsibles")

    def send_reminder(self):
        raise NotImplementedError("The employee cannot send reminders")

    def mark_completed(self):
        print("Employee marks the task as completed")


admin = AdminTask()
admin.create_task("Code Review")
admin.assign_responsible("Pedro")
admin.send_reminder()
admin.mark_completed()

employee = EmployeeTask()
employee.mark_completed()


try:
    employee.create_task("Test Task")
except NotImplementedError as e:
    print(e)

try:
    employee.assign_responsible("Juan")
except NotImplementedError as e:
    print(e)
