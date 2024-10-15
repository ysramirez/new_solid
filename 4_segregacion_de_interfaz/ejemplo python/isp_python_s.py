from abc import ABC, abstractmethod

class IManagementTask(ABC):
    @abstractmethod
    def create_task(self, title):
        pass

    @abstractmethod
    def assign_responsible(self, user):
        pass

    @abstractmethod
    def send_reminder(self):
        pass

class IRegularTask(ABC):
    @abstractmethod
    def mark_completed(self):
        pass


class AdminTask(IManagementTask, IRegularTask):
    def create_task(self, title):
        print(f"Admin creates the task: {title}")

    def assign_responsible(self, user):
        print(f"Admin assigns the task to: {user}")

    def send_reminder(self):
        print("Admin sends reminder")

    def mark_completed(self):
        print("Admin marks the task as completed")

class EmployeeTask(IRegularTask):
    def mark_completed(self):
        print("Employee marks the task as completed")

admin = AdminTask()
admin.create_task("Code Review")
admin.assign_responsible("Pedro")
admin.send_reminder()
admin.mark_completed()

employee = EmployeeTask()
employee.mark_completed()
