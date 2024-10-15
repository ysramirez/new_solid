class UserManager:
    def __init__(self, users):
        self.users = users

    def add_user(self, user):
        self.users.append(user)
        print(f"User {user} added successfully.")

    def remove_user(self, user):
        if user in self.users:
            self.users.remove(user)
            print(f"User {user} removed successfully.")
        else:
            print(f"User {user} not found.")

    def print_users(self):
        print("Current users list:")
        for user in self.users:
            print(f"- {user}")

    def save_to_file(self, filename):
        with open(filename, 'w') as file:
            for user in self.users:
                file.write(f"{user}\n")
        print(f"User list saved to {filename}")

# Uso del código
users = ["Alice", "Bob", "Charlie"]
manager = UserManager(users)

manager.add_user("David")
manager.print_users()
manager.save_to_file("users.txt")
manager.remove_user("Alice")
manager.print_users()
